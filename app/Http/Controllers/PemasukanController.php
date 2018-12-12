<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class PemasukanController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.pemasukan',compact('invoices'));
    }
    public function destroy($id)
    {
      $invoice = Invoice::findOrFail($id);

      Orderan::where('invoice_id', $invoice->id)->delete();

      $invoice->delete();

      return redirect()->route('invoices.index'); 

    }
}
