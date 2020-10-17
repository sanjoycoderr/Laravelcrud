@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <form method="post" action="{{route('/update',$data->id)}}">
                {{csrf_field()}}
              <div class="form-group">
              <label for="firstname">firstname</label>
              <input type="text" name="FIRSTNAME" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$data->first_name}}">
            </div>
            <div class="form-group">
              <label for="">lastname</label>
            <input type="text" name="LASTNAME" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$data->last_name}}">
              <button type="submit" class="btn btn-primary m-3">save</button>
            </div>
            </form>

            <div>
              @if(session('msg'))
              {{session('msg')}}
              @endif
            </div>
        </div>
    </div>
</div>
@endsection