@extends('layout.admin');
@section( 'content')
<h1> userspage</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">created_at</th>
      <th scope="col">controls</th>
    </tr>
  </thead>
  <tbody>
  @foreach($roles_users as $user)
      
  @endforeach
    <tr>
      <th scope="row">1</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->created_at}}</td>
      <td>
      <a class="btn btn primary" href="{{route('users.show',$user->id)}}"> show </a>
      <a class="btn btn primary" href="{{route('users.edit',$user->id)}}"> edit </a>
      {{-- <a class="btn btn primary"> delete</a> --}}
      <form method="post" action="{{route('users.destroy',$user->id)}}">
      @csrf
      @method('Delete')
      <input type="sumbit" class="btn btn primary" value="delete">



      </form>
      
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
<a class="btn btn primary" href="{{route('user.create)}}"> adduser </a>

@endsection