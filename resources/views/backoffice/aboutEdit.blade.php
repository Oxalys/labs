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
    <textarea class="form-control w-25 mr-3 w-75" required="required" type="text" name="texteGauche" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id ullamcorper velit, eu efficitur dolor. Integer vitae venenatis sapien. Pellentesque at tortor convallis, lobortis purus eu, blandit ipsum. Nam fringilla, felis vel efficitur auctor, dolor tortor tristique enim, non aliquam odio neque vel eros. Sed eleifend venenatis velit, quis fringilla turpis pulvinar sed. Quisque vitae tellus tellus. Curabitur facilisis pretium iaculis. Suspendisse sapien augue, convallis eget scelerisque in, eleifend in magna. Curabitur rutrum vestibulum iaculis. Suspendisse potenti."></textarea>
  </div> <!-- close .form-group -->
  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for="">Paragraphe de droite:</label>
    <textarea class="form-control w-25 mr-3 w-75" required="required" type="text" name="texteDroite" placeholder="Donec a scelerisque augue. In scelerisque pretium arcu, sit amet maximus elit eleifend quis. Nunc maximus auctor sodales. Vivamus dapibus mauris in diam porta viverra. Sed porttitor sit amet ex vel ullamcorper. Nulla ante tortor, luctus eu posuere vel, fermentum eu tortor. Aenean sit amet dolor massa. Fusce in dui faucibus, pulvinar est eget, ultricies tellus. Curabitur et lacus in est sodales aliquet. Nam ac nisl eget elit ullamcorper mattis. Etiam nisi eros, imperdiet eget convallis non, consectetur sed dui."></textarea>
  </div> <!-- close .form-group -->
  <div class="form-group d-flex">
    <label class="mr-3 mt-2" for="">Vidéo:</label>
    <input type="url" class="form-control w-25 mr-3 w-50" value="" name="video">
</div> <!-- close .form-group -->
<input type="submit" value="Update" class="btn btn-primary mb-2">
</form>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection