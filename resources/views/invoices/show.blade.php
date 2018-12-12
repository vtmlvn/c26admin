@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="clearfix">
            <span class="panel-title">Invoice</span>
            <div class="pull-right">
                <a href="{{ route('invoices.index') }}" class="btn btn-default">Back</a>
                <a href="{{ route('invoices.edit', $invoice) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Invoice No.</label>
                    <p>{{ $invoice->invoice_no }}</p>
                </div>
                <div class="form-group">
                    <label>Total Biaya</label>
                    <p>{{ $invoice->total_biaya }}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nama Customer</label>
                    <p>{{ $invoice->nama_customer }}</p>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <pre class="pre">{{ $invoice->alamat_customer }}</pre>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Title</label>
                    <p>{{ $invoice->judul }}</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Tanggal Masuk</label>
                        <p>{{ $invoice->tanggal_masuk }}</p>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Tanggal Keluar</label>
                        <p>{{ $invoice->tanggal_keluar }}</p>
                    </div>
                </div>
                <hr>
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>Layanan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoice->orderans as $orderan)
                            <tr>
                                <td class="table-name">{{$orderan->nama}}</td>
                                <td class="table-price">{{$orderan->harga}}</td>
                                <td class="table-qty">{{$orderan->jumlah}}</td>
                                <td class="table-total">{{$orderan->total}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="table-empty" colspan=2></td>
                            <td class="table-label">Sub Total</td>
                            <td class="table-amount">{{ $invoice->subtotal }}</td>
                        </tr>
                        <tr>
                            <td class="table-empty" colspan=2></td>
                            <td class="table-label">Discount</td>
                            <td class="table-amount">{{ $invoice->diskon }}</td>
                        </tr>
                        <tr>
                            <td class="table-empty" colspan=2></td>
                            <td class="table-label">Total Biaya</td>
                            <td class="table-amount">{{ $invoice->total_biaya }}</td>
                        </tr>
                        <tr>
                            <td class="table-empty" colspan=2></td>
                            <td class="table-label">Status</td>
                            <td class="table-amount">{{ $invoice->status }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection