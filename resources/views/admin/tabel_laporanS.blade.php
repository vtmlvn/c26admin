<!-- Tabel Pegawai -->
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabel Pengeluaran</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  <button type="button" class="btn btn-block btn-primary" style="width:auto; margin-bottom: 10px;" data-toggle="modal" data-target="#modal-default">Tambah Pengeluaran</button>
    <table id="example1" class="table table-bordered table-striped">
    @if(!empty($pengeluarans))
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
      @foreach($pengeluarans as $pengeluaran)
      <tr>
      <td>{{$pengeluaran['id_pengeluaran']}}</td>
        <td>{{$pengeluaran['tanggal']}}</td>
        <td>{{$pengeluaran['permintaan']}}</td>
        <td>{{$pengeluaran['jumlah']}}</td>
        <td>Rp. {{$pengeluaran['harga_satuan']}},00</td>
        <td>Rp. {{$pengeluaran['total'] = $pengeluaran['harga_satuan'] * $pengeluaran['jumlah']}},00</td>
        @if($pengeluaran['status']=='0')
          <td>Menunggu Penerimaan</td>
        @elseif($pengeluaran['status']=='1')
          <td>Diterima</td>
        @else($pengeluaran['status']=='2')
          <td>Ditolak</td>
        @endif

        <td>
        @if($pengeluaran['status']=='0')
        <td><a type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit-{{$pengeluaran->id_pengeluaran}}"><i class="fa fa-edit"></i></a>
        <a role="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger-{{ $pengeluaran->id_pengeluaran}}"><i class="fa fa-trash" ></i></button></td>
        @endif
      </tr>
        <!-- /.modal -->
  <div class="modal fade" id="modal-edit-{{$pengeluaran->id_pengeluaran}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Data Pengeluaran</h4>
        </div>
        <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
            <form method="post" action="{{action('PengeluaranController@update', $pengeluaran['id_pengeluaran'])}}">
            @csrf
            <input name="_method" type="hidden" value="PATCH">
              <label for="inputText3" class="col-sm-2 control-label">Permintaan</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="permintaan" value="{{$pengeluaran->permintaan}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label">Jumlah</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="jumlah" value="{{$pengeluaran->jumlah}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber3" class="col-sm-2 control-label">Harga Satuan</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNumber3" name="harga_satuan" value="{{$pengeluaran->harga_satuan}}">
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
      <div class="modal modal-danger fade" id="modal-danger-{{$pengeluaran->id_pengeluaran}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus Data Permintaan</h4>
        </div>
        <div class="modal-body">
          <p>Yakin hapus data milik {{$pengeluaran->permintaan}} ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
          <form action="{{action('PengeluaranController@destroy', $pengeluaran['id_pengeluaran'])}}" method="post">
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
        <td>Supervisor</td>
        <td>Rp3.500.000</td>
        <td><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-edit"><i class="fa fa-edit"></i></button>
        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash" ></i></button></td>
      </tr>
      <tr>
        <td>0001</td>
        <td>Papyrus Protectus</td>
        <td>Darmaga Cans lelel no.69</td>
        <td>0866666666666</td>
        <td>Karyawan</td>
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
          <h4 class="modal-title">Tambah Pengeluaran</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">
          <form method="post" action="{{route('laporanS.index')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label" name="tanggal">Tanggal</label>

              <div class="col-sm-10">
                <input type="date" class="form-control" id="inputText3" name="tanggal">
              </div>
            </div>

            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label" name="permintaan">Permintaan</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" placeholder="Sabun" name="permintaan">
              </div>
            </div>

            <div class="form-group">
              <label for="inputText3" class="col-sm-2 control-label"name="jumlah">Jumlah</label>

              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="jumlah" placeholder="2">
              </div>
            </div>
            
              <label for="inputNumber3" class="col-sm-2 control-label" >Harga Satuan</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input type="text" class="form-control"name="harga_satuan">
                  <span class="input-group-addon">,00</span>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="inputText3" value=0 name="total">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-10">
                <input type="hidden" class="form-control" id="inputText3" value=0 name="status">
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
      <p>tidak ada pengeluaran</p>
      @endif      
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</div> 