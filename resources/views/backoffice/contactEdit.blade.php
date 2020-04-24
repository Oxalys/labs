@extends('adminlte::page')

@section('content')
<header>
    <h1 class="editation text-center">Contact</h1>
</header>

{{-- logo --}}
<div class="container">
  <div class="form-register">
  <form name="" action="{{route("contact.update", $contactSection)}}" method="POST" enctype="multipart/form-data" >
  @csrf
  @method("PUT")
  <div class="form-group">
    <label class="mr-3 mt-2" for="">Description:</label>
    <input class="form-control w-25 mr-3" value="" name="description">
    <label class="mr-3 mt-2" for="">Bureau:</label>
    <input class="form-control w-25 mr-3" value="" name="bureau">
    <label class="mr-3 mt-2" for="">Adresse:</label>
    <input class="form-control w-25 mr-3" value="" name="adresse">
    <label class="mr-3 mt-2" for="">Code Postal & Ville:</label>
    <input class="form-control w-25 mr-3" value="" name="villecode">
    <label class="mr-3 mt-2" for="">N° de téléphone:</label>
    <input class="form-control w-25 mr-3" value="" name="tel">
    <label class="mr-3 mt-2" for="">Adresse Mail:</label>
    <input class="form-control w-25 mr-3" value="" name="mail">
    </div>
    <input type="submit" value="Update" class="btn btn-primary mb-2">
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection