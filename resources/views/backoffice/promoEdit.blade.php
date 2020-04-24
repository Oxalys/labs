@extends('adminlte::page')

@section('content')
    
<header>
    <h1 class="editation text-center">Promo</h1>
</header>

{{-- logo --}}
<div class="container">
  <div class="form-register">
  <form name="" action="{{route("promo.update", $promo)}}" method="POST" enctype="multipart/form-data" >
  @csrf
  @method("PUT")
  <div class="form-group">
    <label class="mr-3 mt-2" for="">Titre:</label>
    <input class="form-control w-25 mr-3" value="" name="titre">
    <label class="mr-3 mt-2" for="">Phrase:</label>
    <input class="form-control w-25 mr-3" value="" name="texte">
    </div>
    <input type="submit" value="Update" class="btn btn-primary mb-2">
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection