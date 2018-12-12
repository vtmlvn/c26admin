<!-- Tabel Pegawai -->
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Tabel Pengeluaran</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Tanggal</th>
          <th>Nama Pengeluaran</th>
          <th>Jumlah</th>
          <th>Harga Satuan</th>
          <th>Total</th>
          <th>Delete</th>
          <!-- <th>Username</th>
          <th>Password</th> -->
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>0002</td>
          <td>12-12-2018</td>
          <td>Gas 12kg</td>
          <td>2</td>
          <td>Rp89.000</td>
          <td>Rp178.000</td>
          <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        <tr>
          <td>0001</td>
          <td>11-12-2018</td>
          <td>Token Listrik</td>
          <td>92kWh</td>
          <td>???</td>
          <td>Rp112.000</td>
          <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
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
            <h4 class="modal-title">Hapus Data Pengeluaran</h4>
          </div>
          <div class="modal-body">
            <p>Yakin hapus data pengeluaran  ?</p>
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