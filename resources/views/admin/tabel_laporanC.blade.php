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
        <th>Nama Pengeluaran</th>
        <th>Jumlah</th>
        <th>Harga Satuan</th>
        <th>Total</th>
        <th>Accept</th>
        <th>Decline</th>
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
        <td>Rp. {{$total = $pengeluaran['harga_satuan'] * $pengeluaran['jumlah']}},00</td> 
        <td>
        <form action="{{action('CEOLaporanController@update', $pengeluaran['id_pengeluaran'])}}" method="post" enctype="multipart/form-data">
        @csrf
          <input type="hidden" name="status" value="1"> </input>
          <button type="submit" class="btn btn-primary"><i class="fa fa-check" ></i></button>
        </form>
          <!-- <button type="button" class="btn btn-success btn-xs" action="{{action('CEOLaporanController@update', $pengeluaran['id_pengeluaran'])}}"><i class="fa fa-check" ></i></button> -->
        </td>
        <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-times" ></i></button></td>
      </tr>

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
 

      @else 
      <p>tidak ada permintaan</p>
      @endif      
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
</div> 