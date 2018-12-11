<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use Validator;
class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans=Karyawan::all();
        return view('admin/pegawai',compact('karyawans'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pegawai');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'username'=>'required|string|max:9',
            'password'=>'required|string|max:15',
            'nama'=>'required|string|max:20',
            'alamat'=>'required|string|max:50',
            'no_hp'=>'required|string|max:15',
            'gaji'=>'required|int',
            'issupervisor'=>'required|in:1,0',
        ]);
        if($validator->fails()){
            return redirect('admin/pegawai')->withInput()->withErrors($validator);
        }
        Karyawan::create($input);
        return redirect('admin/pegawai')->with('karyawans',$input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan=Karyawan::find($id);
        return view('admin/pegawai',compact('karyawan','id'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $karyawan=Karyawan::find($id);
        $input = $request->all();
        $validator = Validator::make($input,[
            'username'=>'required|string|max:9',
            'password'=>'required|string|max:15',
            'nama'=>'required|string|max:20',
            'alamat'=>'required|string|max:50',
            'no_hp'=>'required|string|max:15',
            'gaji'=>'required|string',
            'issupervisor'=>'required|in:1,0',
        ]);
        if($validator->fails()){
            return redirect('admin/pegawai')->withInput()->withErrors($validator);
        }
        $karyawan->update($input);
        return redirect('admin/pegawai')->with('karyawan',$input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan=Karyawan::find($id);
        $karyawan->delete();
        return redirect('admin/pegawai')->with('karyawan',$karyawan);
    }
}
