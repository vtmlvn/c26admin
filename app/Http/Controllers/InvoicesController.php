<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Orderan;
use Carbon\Carbon;
use DB;
use PDF;

class InvoicesController extends Controller
{
    public function index()
    {
      $invoices = Invoice::all();
      return view('admin.admin', compact('invoices'));
    }

    public function create()
    {
      $now= now()->format('Y-m-d');
      $nweek= now()->addWeek()->format('Y-m-d');
      $lweek= now()->subWeek()->format('Y-m-d');
      return view('invoices.create', compact('now', 'nweek', 'lweek'));
    }

    public function store(Request $req)
    {
      $this->validate($req, [
        'invoice_no' => 'required|alpha_dash|unique:invoices',
        'nama_customer' => 'required|max:255',
        'alamat_customer' => 'required|max:255',
        'tanggal_masuk' => 'required|date_format:Y-m-d',
        'tanggal_keluar' => 'required|date_format:Y-m-d',
        'judul' => 'required|max:255',
        'diskon' => 'required|integer|min:0',
        'status' => 'required',
        'orderans.*.nama' => 'required|max:255',
        'orderans.*.harga' => 'required|min:1|integer',
        'orderans.*.jumlah' => 'required|integer|min:1'
      ]);
      $orderans = collect($req->orderans)->transform(function($orderan) {
        $orderan['total'] = $orderan['jumlah'] * $orderan['harga'];
        return new Orderan($orderan);
      });

      if($orderans->isEmpty())
      {
        return response()->json([
          'orderans_empty' => ['One or more orderans is required']
        ], 422);
      }

      $data = $req->except('orderans');
      $data['subtotal'] = $orderans->sum('total');
      $data['total_biaya'] = $data['subtotal'] - $data['diskon'];

      $invoice = Invoice::create($data);

      $invoice->orderans()->saveMany($orderans);

      return response()->json([
        'created' => true,
        'id' => $invoice->id
      ]);

      return view('admin.admin', compact('invoices'));
    }

    public function edit($id)
    {
      $now= now()->format('Y-m-d');
      $nweek= now()->addWeek()->format('Y-m-d');
      $lweek= now()->subWeek()->format('Y-m-d');
      $invoice = Invoice::with('orderans')->findOrFail($id);

      return view('invoices.edit', compact('invoice', 'now', 'nweek', 'lweek'));
    }

    public function show($id)
    {
       $invoice = Invoice::with('orderans')->findOrFail($id);

       return view('invoices.show', compact('invoice'));
    }

    public function update(Request $req, $id)
    {
      $this->validate($req, [
        'invoice_no' => 'required|alpha_dash|unique:invoices',
        'nama_customer' => 'required|max:255',
        'alamat_customer' => 'required|max:255',
        'tanggal_masuk' => 'required|date_format:Y-m-d',
        'tanggal_keluar' => 'required|date_format:Y-m-d',
        'judul' => 'required|max:255',
        'diskon' => 'required|integer|min:0',
        'orderans.*.nama' => 'required|max:255',
        'orderans.*.harga' => 'required|min:1|integer',
        'orderans.*.jumlah' => 'required|integer|min:1'
      ]);
      
      $invoice = Invoice::findOrFail($id);

      $orderans = collect($req->orderans)->transform(function($orderan) {
        $orderan['total'] = $orderan['jumlah'] * $orderan['harga'];
        return new Orderan($orderan);
      });

      if($orderans->isEmpty())
      {
        return response()->json([
          'orderans_empty' => ['One or more orderans is required']
        ], 422);
      }

      $data = $req->except('orderans');
      $data['subtotal'] = $orderans->sum('total');
      $data['total_biaya'] = $data['subtotal'] - $data['diskon'];

      $invoice->update($data);

      Orderan::where('invoice_id', $invoice->id)->delete();

      $invoice->orderans()->saveMany($orderans);

      return response()->json([
        'updated' => true,
        'id' => $invoice->id
      ]);
    }

    public function destroy($id)
    {
      $invoice = Invoice::findOrFail($id);

      Orderan::where('invoice_id', $invoice->id)->delete();

      $invoice->delete();

      return redirect()->route('invoices.index'); 

    }
    public function pdfview($id){
      $invoice = Invoice::findorFail($id);
        view()->share('invoice',$invoice);

        
        	// pass view file
            $pdf = PDF::loadView('invoices.pdfview');
            // download pdf
        
        return view('invoices.pdfview');
    }

}
