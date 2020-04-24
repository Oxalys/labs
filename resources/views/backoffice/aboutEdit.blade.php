@extends('adminlte::page')

@section('content')

<header class="mb-5">
    <h1 class="text-center">About</h1>
</header>

<div class="container">
<div class="form-register">
<form name="" action="{{route('about.update', $abouts)}}" method="POST" enctype="multipart/form-data" >
  @csrf
  @method("PUT")
  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for="">Titre:</label>
    <input class="form-control w-25 mr-3" value="" name="titre">
  </div> <!-- close .form-group -->
  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for="">Paragraphe de gauche:</label>
    <input class="form-control w-25 mr-3" value="" name="texteGauche" id="" >
  </div> <!-- close .form-group -->
  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for="">Paragraphe de droite:</label>
    <input class="form-control w-25 mr-3" value="" name="texteDroite">
  </div> <!-- close .form-group -->
  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for="">Vidéo:</label>
    <input type="url" class="form-control w-25 mr-3" value="" name="video">
</div> <!-- close .form-group -->
<input type="submit" value="Update" class="btn text-light mb-2">
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection