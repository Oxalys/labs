@extends('adminlte::page')

@section('content')
  <header>
      <h1 class="editation text-center my-4">Quote</h1>
  </header>

<div class="container">
<div class="form-register">
    <form name="" action="{{route("quote.update", $quote)}}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method("PUT")
    {{-- phrase --}}
    <div class="form-group d-flex">
      <label class="mr-3 my-2" for="">Quote:</label>
      <textarea class="form-control w-25 mr-3" required="required" type="text" name="quote" placeholder="Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum."></textarea>
      <input type="submit" value="Update" class="btn btn-primary mb-2">
    </div>
    {{-- phrase --}}
  </form>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">

@endsection