@extends('admin.page')

@section('title')
    <title>Pegawai | Admin</title>
@stop

@section('header')
<section class="content-header">
    <h1>
    Pegawai
    <!-- <small>Optional description</small> -->
    </h1>

</section>
@stop

@section('content')

@include('admin.tabel_pegawai')
@stop