@extends('admin.page')

@section('header')
<section class="content-header">
    <h1>
    Pengeluaran
    <!-- <small>Optional description</small> -->
    </h1>
</section>
@stop

@section('content')

@include('admin.tabel_pengeluaran')
@stop