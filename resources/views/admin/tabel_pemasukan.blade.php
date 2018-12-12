<!-- Tabel Pegawai -->
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Tabel Pemasukan</h3>
      <h6>nanti gw pisahin</h6>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        
        <tr>
          <th>Id</th>
          <th>Tanggal</th>
          <th>Nama Pemasukan</th>
          <th>Jumlah</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>0002</td>
          <td>20-12-2012</td>
          <td>Invoice #xxx000</td>
          <td>Rp43.300,00</td>
          <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        <tr>
          <td>0001</td>
          <td>20-12-2012</td>
          <td>User #asdxyz </td>
          <td>Rp700.000, 00</td>
          <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        
        @foreach ($invoices as $invoice)
        @if($invoice->status=="Lunas")
        <tr>
          <td>{{$invoice->id}}</td>
          <td>{{$invoice->tanggal_masuk}}</td>
          <td>Invoice Customer {{$invoice->nama_customer}} </td>
          <td>Rp {{$invoice->total_biaya}}</td>
         </tr>
        @endif
        @endforeach
        <tr>
          <td colspan=3>Jumlah</td>
          <td>Rp {{$jumlah}}</td>
          <td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
    
    <div class="modal modal-danger fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Hapus Data Customer</h4>
          </div>
          <div class="modal-body">
            <p>Yakin hapus data milik (NAMA) ?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-outline">Hapus</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>