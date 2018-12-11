<!-- Tabel Pegawai -->
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Tabel Pemasukan</h3>
      <h6>nanti gw pisahin</h6>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <button type="button" class="btn btn-block btn-primary" style="width:auto; margin-bottom: 10px;" data-toggle="modal" data-target="#modal-default">Tambah Customer</button>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Tanggal Diterima</th>
          <th>Nama Pemasukan</th>
          <th>Tipe</th>
          <th>Jumlah</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>0002</td>
          <td>20-12-2012</td>
          <td>Invoice #xxx000</td>
          <td>Order</td>
          <td>Rp43.300,00</td>
          <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        <tr>
          <td>0001</td>
          <td>20-12-2012</td>
          <td>User #asdxyz </td>
          <td>Deposit</td>
          <td>Rp700.000, 00</td>
          <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        </tbody>
        <!-- <tfoot>
        <tr>
          <th>Id</th>
          <th>Tanggal Diterima</th>
          <th>Nama Pemasukan</th>
          <th>Tipe</th>
          <th>Jumlah</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </tfoot> -->
      </table>
    </div>
    <!-- /.box-body -->
    <div class="modal fade" id="modal-default_2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Customer</h4>
          </div>
          <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <label for="inputText3" class="col-sm-2 control-label">Nama</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText3" placeholder="John Doe">
                </div>
              </div>
              <div class="form-group">
                <label for="inputText3" class="col-sm-2 control-label">Alamat</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText3" placeholder="Dramaga Cantik Blok A2-11">
                </div>
              </div>
              <div class="form-group">
                <label for="inputNumber3" class="col-sm-2 control-label">No. HP</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputNumber3" placeholder="0818888888">
                </div>
              </div>
              {{-- <div class="form-group">
                <label for="inputNumber3" class="col-sm-2 control-label">Deposit</label>
  
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">,00</span>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="form-group">
                <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputUsername3" placeholder="asdfjieb">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
  
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="" placeholder="Password">
                </div>
              </div> --}}
              {{-- <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Supervisor
                      </label>
                    </div>
                  </div>
                </div> --}}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-edit_2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Data Customer</h4>
          </div>
          <div class="modal-body">
          <div class="box-body">
              <div class="form-group">
                <label for="inputText3" class="col-sm-2 control-label">Nama</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText3" placeholder="John Doe">
                </div>
              </div>
              <div class="form-group">
                <label for="inputText3" class="col-sm-2 control-label">Alamat</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputText3" placeholder="Dramaga Cantik Blok A2-11">
                </div>
              </div>
              <div class="form-group">
                <label for="inputNumber3" class="col-sm-2 control-label">No. HP</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputNumber3" placeholder="0818888888">
                </div>
              </div>
              {{-- <div class="form-group">
                <label for="inputNumber3" class="col-sm-2 control-label">Deposit</label>
  
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">,00</span>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="form-group">
                <label for="inputUsername3" class="col-sm-2 control-label">Username</label>
  
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputUsername3" placeholder="asdfjieb">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
  
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Supervisor
                      </label>
                    </div>
                  </div>
                </div> --}}
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
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