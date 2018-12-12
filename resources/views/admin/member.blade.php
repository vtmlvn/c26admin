@extends('admin.page')

@section('title')
    <title>Membership | Admin</title>
@stop

@section('header')
<section class="content-header">
    <h1>
    Membership
    <!-- <small>Optional description</small> -->
    </h1>
    
</section>
@stop

@section('content')

@include('admin.tabel_membership')

@stop