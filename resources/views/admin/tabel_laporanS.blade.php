<!-- Tabel Pegawai -->
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Tabel Membership</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <button type="button" class="btn btn-block btn-primary" style="width:auto; margin-bottom: 10px;" data-toggle="modal" data-target="#modal-default_1">Tambah Member</button>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Tanggal</th>
          <th>Permintaan</th>
          <th>Jumlah</th>
          <th>Harga Satuan</th>
          <th>Total</th>
          <th>Status</th>
          <th>Edit/Delete</th>
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
          <td><b>DITOLAK</b></td>
          <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit_2"><i class="fa fa-edit"></i></button>
          <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        <tr>
          <td>0001</td>
          <td>11-12-2018</td>
          <td>Detergen</td>
          <td>2</td>
          <td>Rp45.000</td>
          <td>Rp90.000</td>
          <td><b>DITERIMA</b></td>
          <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit_2"><i class="fa fa-edit"></i></button>
          <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
        </tr>
        </tbody>
        <!-- <tfoot>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No. Handphone</th>
          <th>Gaji</th>
        </tr>
        </tfoot> -->
      </table>
    </div>
    <!-- /.box-body -->
    <div class="modal fade" id="modal-default_1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Member</h4>
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
              <div class="form-group">
                <label for="inputNumber3" class="col-sm-2 control-label">Deposit</label>
  
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">,00</span>
                  </div>
                </div>
              </div>
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
            <h4 class="modal-title">Edit Data Member</h4>
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
              <div class="form-group">
                <label for="inputNumber3" class="col-sm-2 control-label">Deposit</label>
  
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">,00</span>
                  </div>
                </div>
              </div>
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
            <h4 class="modal-title">Hapus Data Member</h4>
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