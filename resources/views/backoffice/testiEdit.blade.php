@extends('adminlte::page')

@section('content')
    <div class="container">
<form name="" action="{{route("testi.store")}}" method="POST" enctype="multipart/form-data" >
    @csrf

  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for=""> Auteur:</label> 
    <input class="form-control w-25 mr-3" required="required" type="input" name="auteur">
    <label class="mr-3 mt-2" for=""> Ajouter un commentaire:</label> 
    <textarea class="form-control w-25 mr-3" required="required" type="text" name="comm"></textarea>
    <input type="submit" value="Add" class="btn btn-primary mb-2">
  </div><!-- close .form-group -->
</form>
  </div>
</div>
<div class="container">
<table class="table table-striped">
  <thead>
  <tr class="center">
      <th scope="col">Auteur</th>
      <th>Commentaire</th>
      <th>Action</th>
  </tr>
  </thead>
  <tbody>
      {{-- @foreach ( as $item) --}}
      <tr>
      <td class="w-25"></td>
      <td class="w-50"></td>
      <td class="w-25"><a href="" class="btn btn-primary">Delete</a></td>
      </tr>
      {{-- @endforeach --}}

  </tbody>
</table>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection