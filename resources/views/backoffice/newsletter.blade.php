@extends('adminlte::page')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="my-5"><h3 class="text-center">Liste des mails abonnés à la newsletter : </h3>
        </div>
    
        <table class="table flex-center" >
         <tbody>
             @foreach ($newsletter as $item)
                 <tr>
                    <td>{{$item->mail}}</td>    
                 </tr>
              @endforeach
         </tbody>
       </table>
        
    </div>
</div>

@endsection


@section('css')
<link rel="stylesheet" href="{{asset("css/styleAdminLTE.css")}}">

@endsection
