@extends('layout.admin');
@section( 'content')
<h1> userspage</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">controls</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($roles as $role)
       <tr>
      <th scope="row">1</th>
      <td>{{$role->name}}</td>
      
      <td>
      <a class="btn btn primary" href="{{route('users.show',$role->id)}}"> show </a>
      
      
      </td>
    </tr>
  @endforeach
   
   
  </tbody>
</table>
<a class="btn btn primary" href="{{route('roles.create)}}"> adduser </a>

@endsection