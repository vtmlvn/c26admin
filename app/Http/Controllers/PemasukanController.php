<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class PemasukanController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        $jumlah = Invoice::where('status','Lunas')->sum('total_biaya');
        return view('admin.pemasukan',compact('invoices','jumlah'));
    }
    
}
