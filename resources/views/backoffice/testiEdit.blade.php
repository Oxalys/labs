@extends('adminlte::page')

@section('content')
<header class="mb-5">
  <h1 class="text-center">Testimonials</h1>
</header>

    <div class="container">
<form name="" action="{{route("testi.store")}}" method="POST" enctype="multipart/form-data" >
    @csrf

  <div class="form-group d-flex row">
    <label class="mr-3 mt-2" for="">Auteur:</label> 
    <input class="form-control w-25 mr-3" required="required" type="input" name="auteur">
    <label class="mr-3 mt-2" for="">Role:</label> 
    <input class="form-control w-25 mr-3" required="required" type="input" name="role">
    <label class="mr-3 mt-2" for="">Photo:</label> 
    <input class="form-control w-25 mr-3" required="required" type="file" name="photo">
    <div class="d-flex">
    <label class="mr-3 mt-2 pt-3" for="">Ajouter un commentaire:</label> </div> 
    <div class="col-sm-12 d-flex">
    <textarea class="form-control w-25 mr-3" required="required" type="text" name="comm"></textarea></div>
    <input type="submit" value="Add" class="btn btn-primary m-2">
  </div><!-- close .form-group -->
</form>
  </div>
</div>
<div class="container">
<table class="table table-striped">
  <thead>
  <tr class="center">
    <th>Photo</th>
    <th>Auteur</th>
    <th>Role</th>
    <th>Commentaire</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
      @foreach ( $testi as $item)
      <tr>
      <td><img class="avatar" src="{{asset('storage/'.$item->photo)}}"></td>
      <td>{{$item->auteur}}</td>
      <td>{{$item->role}}</td>
      <td> {{$item->comm}}</td>
      <td class="w-25">
      <a class="btn mb-2 btn-primary" href="{{route('testi.edit', $item)}}">Edit</a>
        <form method="POST" action="{{route("testi.destroy", $item)}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
      </td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection