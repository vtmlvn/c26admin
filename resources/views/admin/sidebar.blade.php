<section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        {{-- <li class="header">LAPORAN</li> --}}
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('home.index')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="{{route('member')}}"><i class="fa fa-user"></i> <span>Membership</span></a></li>
        <li><a href="{{route('pegawai')}}"><i class="fa fa-briefcase"></i> <span>Pegawai (CEO)</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-money"></i> <span>Laporan Keuangan (CEO)</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('graph.index')}}">Grafik Keuangan</a></li>
            <li><a href="{{route('masuk')}}">Pemasukan</a></li>
            <li><a href="{{route('keluar')}}">Pengeluaran</a></li>
          </ul>
        </li>
        <li><a href="{{route('laporanC')}}"><i class="fa fa-list-ul"></i> <span>Laporan (CEO)</span></a></li>
        <li><a href="{{route('laporanS')}}"><i class="fa fa-list-ul"></i> <span>Laporan (Supervisor)</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>