<?php

namespace App\Http\Controllers;
use App\Pengeluaran;
use Illuminate\Http\Request;

class CEOLaporanController extends Controller
{
 public function store(){
    
 }   
    public function index()
    {
        $pengeluarans=Pengeluaran::all();
        return view('admin/laporanC',compact('pengeluarans'));
    }

    public function update(Request $request,Pengeluaran $id)
    {
        // $pengeluaran=Pengeluaran::find($id);
        $id->update([
            'status' => request('status'),
        ]);  
        return redirect('admin/laporanC')->with('success','kill');
    }
    public function show(){}
}
