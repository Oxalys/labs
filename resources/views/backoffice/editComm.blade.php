@extends('adminlte::page')

@section('content')

<header class="mb-5">
    <h1 class="text-center">Editer un commentaire</h1>
</header>
<div class="container">
    <form name="" action="{{route("testi.update", $testi->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method("PUT")
      <div class="form-group d-flex row">
        <label class="mr-3 mt-2" for="">Auteur:</label> 
        <input class="form-control w-25 mr-3" required="required" type="input" name="auteur">
        <label class="mr-3 mt-2" for="">Role:</label> 
        <input class="form-control w-25 mr-3" required="required" type="input" name="role">
        <label class="mr-3 mt-2" for="">Photo:</label> 
        <input class="form-control w-25 mr-3" required="required" type="file" name="photo">
        <div class="d-flex">
        <label class="mr-3 mt-2 pt-3" for="">Editer le commentaire:</label> </div> 
        <div class="col-sm-12 d-flex">
        <textarea class="form-control w-25 mr-3" required="required" type="text" name="comm"></textarea></div>
        <input type="submit" value="Update" class="btn btn-primary m-2">
      </div><!-- close .form-group -->
    </form>
      </div>
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection