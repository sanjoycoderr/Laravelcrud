@extends('app')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-3 offset-md-3 ">
        <form method="post" action="{{Route('/store')}}">
        {{csrf_field()}}
      <div class="form-group">
      <label for="firstname">firstname</label>
      <input type="text" name="FIRSTNAME" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">lastname</label>
      <input type="text" name="LASTNAME" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <button type="submit" class="btn btn-primary m-3">save</button>
    </div>
    </form>
      </div>
  </div>
  <div>
<h4 class="text-success">
 @if(session('msg'))
 {{session('msg')}}
 @endif
</h4>
</div>
</div>

@endsection







