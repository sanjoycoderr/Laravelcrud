@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-2">
        <table class="table border">
    <thead>
        <tr>
            <th>ID</th>

            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        
     @foreach($data as $display)
         <tr>
             <td>
               {{$display->id}}

             </td>
             <td>
               {{$display->first_name}}
            </td>
            <td>
                {{$display->last_name}}
             </td>
             <td>
                 <a href="{{route('/edite',$display->id)}}" class="btn btn-primary">edite</a>
                 <a href="{{route('/delete',$display->id)}}" class="btn btn-danger">delete</a>

             </td>
        </tr>
     @endforeach
        
  
    </tbody>
</table>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4 class="text-success">
                @if(session('msg'))
                {{session('msg')}}
                @endif
               </h4>
        <h4><a href="{{asset('show')}}" class="btn btn-primary">insert data</a></h4>
        </div>
    </div>
</div>
@endsection