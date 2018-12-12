<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengeluaran;
use Validator;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluarans=Pengeluaran::all();
        return view('admin/laporanS',compact('pengeluarans'));//
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'tanggal'=>'required|date',
            'permintaan'=>'required|string|max:30',
            'jumlah'=>'required|int',
            'harga_satuan'=>'required|int',
            'status'=>'required|string',
        ]);
        if($validator->fails()){
            return redirect('admin/laporanS')->withInput()->withErrors($validator);
        }
        Pengeluaran::create($input);
        return redirect('admin/laporanS')->with('pengeluarans',$input);
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
        $pengeluaran=Pengeluaran::find($id);
        return view('admin/laporanS',compact('pengeluaran','id'));//
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
        $pengeluaran=Pengeluaran::find($id);
        $input = $request->all();
        $validator = Validator::make($input,[
            'permintaan'=>'required|string|max:30',
            'jumlah'=>'required|int',
            'harga_satuan'=>'required|int',
   
        ]);
        if($validator->fails()){
            return redirect('admin/laporanS')->withInput()->withErrors($validator);
        }
        $pengeluaran->update($input);
        return redirect('admin/laporanS')->with('pengeluaran',$input);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengeluaran=Pengeluaran::find($id);
        $pengeluaran->delete();
        return redirect('admin/laporanS')->with('pengeluaran',$pengeluaran);
    }
}
