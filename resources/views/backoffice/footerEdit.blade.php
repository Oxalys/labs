@extends('adminlte::page')

@section('content')
<header>
    <h1 class="editation text-center">Footer</h1>
</header>

{{-- logo --}}
<div class="container">
  <div class="form-register">
  <form name="" action="{{route("footer.update", $footer)}}" method="POST" enctype="multipart/form-data" >
  @csrf
  @method("PUT")
  <div class="form-group">
    <label class="mr-3 mt-2" for="">Phrase:</label>
    <input class="form-control w-25 mr-3" value="" name="texte">
    <label class="mr-3 mt-2" for="">Nom du lien:</label>
    <input class="form-control w-25 mr-3" value="" name="textLien">
    <label class="mr-3 mt-2" for="">Lien:</label>
    <input type="url" class="form-control w-25 mr-3" value="" name="lien">
    </div>
    <input type="submit" value="Update" class="btn btn-primary mb-2">
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection