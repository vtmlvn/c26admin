@extends('admin.page')

@section('title')
    <title>Order | Admin</title>
@stop

@section('header')
<section class="content-header">
    <h1>
    Order
    <!-- <small>Optional description</small> -->
    </h1>
    {{-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin View</a></li>
    <li class="active">Rekap Keuangan Bulanan</li>
    </ol> --}}
</section>
@stop

@section('content')
<!-- Grafik Perkembangan Keuangan -->
{{-- @include('admin.graph_keuangan') --}}
      <!-- /.row -->

<!-- Tabel Keuangan -->
@include('admin.tabel_order')


@stop