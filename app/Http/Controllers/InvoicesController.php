<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\Orderan;
class InvoicesController extends Controller
{
    public function index()
    {
      $invoices = Invoice::all();
      return view('admin.admin', compact('invoices'));
    }

    public function create()
    {
      return view('invoices.create');
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
    }

    public function edit($id)
    {
      $invoice = Invoice::with('orderans')->findOrFail($id);

      return view('invoices.edit', compact('invoice'));
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

}
