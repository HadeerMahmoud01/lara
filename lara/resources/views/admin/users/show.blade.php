@extends('layouts.admin')
@section( 'content')




<form>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control"  value="{{$user->email}}" readonly>
    </div>


   <div class="mb-3">
    <label  class="form-label">user name</label>
    <input type="text" class="form-control"  value="{{$user->name}}" readonly>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection