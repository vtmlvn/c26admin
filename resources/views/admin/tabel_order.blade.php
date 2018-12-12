<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabel Order</h3>
    <h5><a href="https://editor.datatables.net/examples/inline-editing/simple">cek ini biar bisa ngedit isi table</a></h5>
  </div>
  <a href="{{ route('invoices.create') }}" class="btn btn-block btn-primary" style="width:auto; margin-bottom: 10px;" >Tambah Order</a>

  <!-- /.box-header -->
  <div class="box-body">
  @if (!empty($invoices))
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No. Order</th>
        <th>Nama</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Total Harga</th>
        <th>Dibuat sejak</th>
        <th>Lihat Invoice</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      @foreach($invoices as $invoice)
      <tr>
                    <td>{{ $invoice->invoice_no }}</td>
                    <td>{{ $invoice->nama_customer }}</td>
                    <td>{{ $invoice->tanggal_masuk }}</td>
                    <td>{{ $invoice->tanggal_keluar }}</td>
                    <td>{{ $invoice->total_biaya }}</td>
                    <td>{{ $invoice->created_at->diffForHumans() }}</td>
                    <td><a href="http://pdf-ace.com/pdfme?url=/invoices/{{ $invoice->invoice_no }}" target= "_blank">Save as PDF</a></td>
                    <td><a href="{{ route('invoices.show', $invoice)}}" class="btn btn-default btn-sm"><i class="fa fa-book"></i></a></td>
                    <td><a href="{{ route('invoices.edit', $invoice)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>
                    <td >
                        <form class="form-inline" action="{{ route('invoices.destroy', $invoice) }}" method="POST" onSubmit="return confirm('Are you sure?')">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
            </tr>      
        @endforeach
        </tbody>
      <tfoot>
      <tr>
        <th>No. Order</th>
        <th>Nama</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Total Harga</th>
        <th>Dibuat sejak</th>
        <th>Download Invoice</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      </tfoot>
    </table>
  </div>
  @else
        <div class="invoice-empty">
            <p class="invoice-empty-title">
                No invoices were created.
            </p>
        </div>
        @endif
  <!-- /.box-body -->
</div>
