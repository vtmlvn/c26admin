@extends('admin.page')

@section('header')
<section class="content-header">
    <h1>
    Pegawai
    <!-- <small>Optional description</small> -->
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Admin View</a></li>
    <li class="active">Pegawai</li>
    </ol>
</section>
@stop

@section('content')

@include('admin.tabel_pegawai')

@stop