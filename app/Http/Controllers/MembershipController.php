<?php

namespace App\Http\Controllers;
use App\Membership;
use Illuminate\Http\Request;
use Validator;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships=Membership::all();
        return view('admin/member',compact('memberships'));//
    }

    public function create()
    {
        return view('admin/member');//
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama'=>'required|string|max:20',
            'alamat'=>'required|string|max:50',
            'no_hp'=>'required|string|max:15',
            'jumlah_deposit'=>'required|string',
        ]);
        if($validator->fails()){
            return redirect('admin/member')->withInput()->withErrors($validator);
        }
        Membership::create($input);
        return redirect('admin/member')->with('memberships',$input);
    }

    public function edit($id)
    {
        $membership=Membership::find($id);
        return view('admin/member',compact('membership','id'));//
    }

    public function update(Request $request, $id)
    {
        $membership=Membership::find($id);
        $input = $request->all();
        $validator = Validator::make($input,[
            'nama'=>'required|string|max:20',
            'alamat'=>'required|string|max:50',
            'no_hp'=>'required|string|max:15',
            'jumlah_deposit'=>'required|string',
        ]);
        if($validator->fails()){
            return redirect('admin/member')->withInput()->withErrors($validator);
        }
        $membership->update($input);
        return redirect('admin/member')->with('memberships',$input);
    }

    public function destroy($id)
    {
        $membership=Membership::find($id);
        $membership->delete();
        return redirect('admin/member')->with('membership',$membership);
    }
}
