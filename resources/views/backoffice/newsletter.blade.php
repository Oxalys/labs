
@extends('adminlte::page')

@section('content')
<div class="flex-center position-ref full-height">
            

    <div class="content">
        <div class="mt-5"><h3 class="text-center">Tout les newsletters de vos utilisateurs</h3>
        </div>
    
        <table class="table" >
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Email</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
             @foreach ($newsletter as $item)
             
                 <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->email}}</td>
                     

                     
                     <td>
                        <form action="{{route('newsletter.destroy',$item)}}" method="post">
                            @csrf
                            @method('DELETE')
                          <button class='btn btn-white'><i class="fas fa-trash text-danger"></i></button>
                        </form>
                      </td>
                     
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
