@extends('admin.page')

@section('title')
    <title>Customer | Admin</title>
@stop

@section('header')
<section class="content-header">
    <h1>
    Customer
    <!-- <small>Optional description</small> -->
    </h1>

</section>
@stop

@section('content')

@include('admin.tabel_customer')

@stop