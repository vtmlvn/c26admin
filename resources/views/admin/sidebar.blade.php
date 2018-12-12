<section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">LAPORAN</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('admin')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="{{route('customer')}}"><i class="fa fa-users"></i> <span>Customer</span></a></li>
        <li><a href="{{route('member')}}"><i class="fa fa-user"></i> <span>Membership</span></a></li>
        <li><a href="{{route('pegawai')}}"><i class="fa fa-briefcase"></i> <span>Pegawai (CEO)</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Laporan Keuangan (CEO)</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('masuk')}}">Pemasukan</a></li>
            <li><a href="{{route('keluar')}}">Pengeluaran</a></li>
          </ul>
        </li>
        <li><a href="{{route('laporanC')}}"><i class="fa fa-list-ul"></i> <span>Laporan (CEO)</span></a></li>
        <li><a href="{{route('laporanS')}}"><i class="fa fa-list-ul"></i> <span>Laporan (Supervisor)</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>