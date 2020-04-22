@extends('adminlte::page')

@section('content')
    
<header>
    <h1 class="editation text-center">Header</h1>
</header>
<div class="container">


<div class="form-register">
  
<form name="register" action="" method="POST" enctype="multipart/form-data" >
    @csrf
    <input name="utf8" type="hidden" value="✓">
    <div class="row pt-5">
      <div class="col-xs-6">
        <div class="form-group">
            <label for="user_password">
              Logo : 
            <input class="form-control" required="required" type="file" name="img"></label>
          </div> <!-- close .form-group -->
      </div> <!-- close .col -->
      <div class="col-xs-6">
        <div class="form-group">

        </div> <!-- close .form-group -->
      </div> <!-- close .col -->
    </div> <!-- close .row -->
    <div class="form-group">
      <label for="user_email">
        Quote :
      </label>
      <input class="form-control w-25" type="email" value="" name="email" id="user_email" >
    </div> <!-- close .form-group -->
    <div class="form-group">
        <label for="user_password">
          Images carousel : 
        <input class="form-control" required="required" type="file" name="img">
        <input class="form-control" required="required" type="file" name="img">
        </label>
      </div><!-- close .form-group -->
     <!-- close .form-group -->
    <div class="form-group">
      
    </div> <!-- close .form-group -->
    <div class="form-group">
      <input type="submit" value="Update" class="btn btn-primary">
    </div> <!-- close .form-group -->
</form>
</div>
</div>

@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection