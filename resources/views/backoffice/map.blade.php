@extends('adminlte::page')

@section('content')
    
<header>
    <h1 class="editation text-center">Plan du bureau : </h1>
</header>

{{-- logo --}}
<div class="container">
  <div class="form-register">
  <form name="" action="" method="POST" enctype="multipart/form-data" >
  @csrf
  @method("PUT")
  <div class="form-group">
    </div>
    <input type="submit" value="Update" class="btn btn-primary mb-2">
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection