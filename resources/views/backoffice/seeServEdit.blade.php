@extends('adminlte::page')

@section('content')

<header class="mb-5">
    <h1 class="text-center">Editer un service</h1>
</header>
<div class="container">
    <form name="" action="{{route("seeServ.update", $seeServ->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method("PUT")
      <div class="form-group d-flex row">
        <label class="mr-3 mt-2" for="">Logo:</label>
          <div class="col-sm-12 d-flex">
            <div class="col-sm-2 form-check">
              <input class="form-check-input" type="checkbox" id="logo1" name="logo" value="flaticon-023-flask">
              <label class="form-check-label mb-2" for="logo1">
                  <i class="flaticon-023-flask">Flask</i>
              </label>
            </div>
            <div class="col-sm-2 form-check">
              <input class="form-check-input" type="checkbox" id="logo2" name="logo" value="flaticon-039-vector">
              <label class="form-check-label mb-3" for="logo2">
                  <i class="flaticon-039-vector">Vector</i>
              </label>
            </div>
            <div class="col-sm-2 form-check">
              <input class="form-check-input px-1" type="checkbox" id="logo3" name="logo" value="flaticon-012-cube">
              <label class="form-check-label mb-3" for="logo3">
                  <i class="flaticon-012-cube">Cube</i>
              </label>
            </div>
            <div class="col-sm-2 form-check">
              <input class="form-check-input" type="checkbox" id="logo4" name="logo" value="flaticon-037-idea">
              <label class="form-check-label mb-3" for="logo4">
                  <i class="flaticon-037-idea">Idea</i>
              </label>
            </div>
          </div>
        <label class="mr-3 mt-2 col-sm-12" for="">Titre:</label> 
        <input class="form-control w-25 mr-3" required="required" type="input" name="titre">
        <div class="d-flex col-sm-12">
        <label class="mr-3 mt-2 pt-3" for="">Description:</label> </div> 
        <div class="col-sm-12 d-flex">
        <textarea class="form-control w-25 mr-3" required="required" type="text" name="texte"></textarea></div>
        <input type="submit" value="Update" class="btn btn-primary m-2">
      </div><!-- close .form-group -->
    </form>
      </div>
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
<link rel="stylesheet" href="{{asset("css/flaticon.css")}}">
    
@endsection