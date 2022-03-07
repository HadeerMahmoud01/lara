@extends('layout.admin')
@section( 'content')

<h1> edit {{$user->name}} </h1>

<form method="post" action="{{route('users.update',$user->id)}}">
{{-- to ensure security of form use csrf --}}
@csrf 
@method('PUT')
<div class="container">
<div class="mb-3">
    <label  class="form-label @error('username', 'post') is-invalid @enderror">User name</label>
    <input type="text" class="form-control"  name="username" value="{{$user->name}}">
 @error('username')
    <div class="alert alert-danger">{{ $message }}</div>
@enderro
  </div>
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control @error('email', 'post') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$user->email}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
 @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderro
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control "@error('password', 'post') is-invalid @enderror" id="exampleInputPassword1" name="password">
  @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderro
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
















@endsection