<!-- Tabel Pegawai -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabel Membership</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <button type="button" class="btn btn-block btn-primary" style="width:auto; margin-bottom: 10px;" data-toggle="modal" data-target="#modal-default">Tambah Membership</button>
    <table id="example1" class="table table-bordered table-striped">
    @if(!empty($memberships))
      <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Handphone</th>
        <th>Jumlah Deposit</th>
        <th>Edit/Delete</th>
        <!-- <th>Username</th>
        <th>Password</th> -->
      </tr>
      </thead>
      <tbody>
      @foreach($memberships as $membership)
      <tr>
      <td>{{$membership['id_membership']}}</td>
        <td>{{$membership['nama']}}</td>
        <td>{{$membership['alamat']}}</td>
        <td>{{$membership['no_hp']}}</td>
        <td>{{$membership['jumlah_deposit']}}</td>
        <td><a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit-{{$membership->id_membership}}"><i class="fa fa-edit"></i></a>
        <a role="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger-{{$membership->id_membership}}"><i class="fa fa-trash" ></i></button></td>
      </tr>
        <!-- /.modal -->
  <div class="modal fade" id="modal-edit-{{$membership->id_membership}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Data Membership</h4>
        </div>
        <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
            <form method="post" action="{{action('MembershipController@update', $membership['id_membership'])}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
              <label for="inputText3" class="col-sm-2 control-label">Nama</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="nama" value="{{$membership->nama}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label">Alamat</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="alamat" value="{{$membership->alamat}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label">No. HP</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNumber3" name="no_hp" value="{{$membership->no_hp}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label">Jumlah Deposit</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control" name="jumlah_deposit" value="{{$membership->jumlah_deposit}}">
                  <span class="input-group-addon">,00</span>
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

      <!--modal delete -->
      <div class="modal modal-danger fade" id="modal-danger-{{$membership->id_membership}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data Membership</h4>
        </div>
        <div class="modal-body">
          <p>Yakin hapus data milik {{$membership->nama}} ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
          <form action="{{action('MembershipController@destroy', $membership['id_membership'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </div>
      </div>
      <!--end of modal delete -->

      @endforeach
      <tr>
        <td>0002</td>
        <td>Sans Kuys</td>
        <td>Darmaga Cans lelel no.420</td>
        <td>088869420911</td>
        <td>Rp3.500.000</td>
        <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>
        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
      </tr>
      <tr>
        <td>0001</td>
        <td>Papyrus Protectus</td>
        <td>Darmaga Cans lelel no.69</td>
        <td>0866666666666</td>
        <td>Rp2.500.000</td>
        <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>
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
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Membership</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
          <form method="post" action="{{route('member.index')}}" enctype="multipart/form-data">
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
              <label for="inputNumber3" class="col-sm-2 control-label" >Jumlah Deposit</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control"name="jumlah_deposit">
                  <span class="input-group-addon">,00</span>
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
  

      @else 
      <p>tidak ada karyawan</p>
      @endif      
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</div> 