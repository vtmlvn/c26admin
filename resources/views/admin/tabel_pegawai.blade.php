<!-- Tabel Pegawai -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabel Pegawai</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <button type="button" class="btn btn-block btn-primary" style="width:auto; margin-bottom: 10px;" data-toggle="modal" data-target="#modal-default">Tambah Pegawai</button>
<<<<<<< HEAD
    <table id="example3" class="table table-bordered table-striped">
    <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Pegawai</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
          <form method="post" action="{{route('pegawai.index')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label" name="nama">Nama</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" placeholder="John Doe" name="nama">
              </div>
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label"name="alamat">Alamat</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="alamat" placeholder="Dramaga Cantik Blok A2-11">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label">No. HP</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNumber3" name="no_hp" placeholder="0818888888">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label" >Gaji</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control"name="gaji">
                  <span class="input-group-addon">,00</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputUsername3" class="col-sm-2 control-label">Username</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername3" placeholder="asdfjieb" name="username">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id="" placeholder="Password"  name="password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Status Supervisor</label>

              <div class="col-sm-10">
                      <input type="radio" name="issupervisor" value='1'> Ya 
                      <input type="radio" name="issupervisor" value='0'> Tidak
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  
  </form>
  <!-- /.modal -->
  

      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->    

</div>
=======
    <table id="example1" class="table table-bordered table-striped">
>>>>>>> 7ccb664c99a43ffd12e04cd5d0f284e82bb84ccf
    @if(!empty($karyawans))
      <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Handphone</th>
        <th>Posisi</th>
        <th>Gaji</th>
        <th>Edit/Delete</th>
        <!-- <th>Username</th>
        <th>Password</th> -->
      </tr>
      </thead>
      <tbody>
      @foreach($karyawans as $karyawan)
      <tr>
      <td>{{$karyawan['id_karyawan']}}</td>
        <td>{{$karyawan['nama']}}</td>
        <td>{{$karyawan['alamat']}}</td>
        <td>{{$karyawan['no_hp']}}</td>
        
        @if($karyawan['issupervisor']=="1")
        <td>Supervisor</td>
        @else 
        <td>Karyawan</td>
        @endif
        <td>Rp {{$karyawan['gaji']}}</td>
        <td><a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit-{{$karyawan->id_karyawan}}"><i class="fa fa-edit"></i></a>
        <a role="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger-{{ $karyawan->id_karyawan}}"><i class="fa fa-trash" ></i></button></td>
      </tr>
        <!-- /.modal -->
  <div class="modal fade" id="modal-edit-{{$karyawan->id_karyawan}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Data Pegawai</h4>
        </div>
        <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
            <form method="post" action="{{action('KaryawanController@update', $karyawan['id_karyawan'])}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
              <label for="inputText3" class="col-sm-2 control-label">Nama</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="nama" value="{{$karyawan->nama}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="alamat" value="{{$karyawan->alamat}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label">No. HP</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNumber3" name="no_hp" value="{{$karyawan->no_hp}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label">Gaji</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control" name="gaji" value="{{$karyawan->gaji}}">
                  <span class="input-group-addon">,00</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="inputUsername3" class="col-sm-2 control-label">Username</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername3" name="username" value="{{$karyawan->username}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

              <div class="col-sm-10">
                <input type="password" class="form-control" id=""name="password" placeholder="Password">
              </div>
            </div><div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Status Supervisor</label>

              <div class="col-sm-10">
                      <input type="radio" name="issupervisor" value='1'> Ya 
                      <input type="radio" name="issupervisor" value='0'> Tidak
                  </div>
                </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

      <!--modal delete -->
      <div class="modal modal-danger fade" id="modal-danger-{{$karyawan->id_karyawan}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data Pegawai</h4>
        </div>
        <div class="modal-body">
          <p>Yakin hapus data milik {{$karyawan->nama}} ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
          <form action="{{action('KaryawanController@destroy', $karyawan['id_karyawan'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          @endforeach
        
        </div>
      </div>
      <!--end of modal delete -->

  
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
    @else 
      <p>tidak ada karyawan</p>
      @endif  
      
  </div>
  <!-- /.box-body -->
  