@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Welcome to your back office</p>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">
    
@endsection
