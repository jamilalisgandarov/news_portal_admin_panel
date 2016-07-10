@extends('layouts.app')
@section('content')
<div class="container">
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Last login</th>
        <th>Delete user</th>
      </tr>
    </thead>
    <tbody>
        <?php $count=1 ?>
        @foreach((App\User::where('status',1)->get()) as $user)
            <tr>
                <td><?php echo $count;$count=$count+1 ?></td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->last_login_at}}</td>
                <td><a class="btn btn-danger" href='/user/delete/{{$user->id}}'>Delete</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>

</div>
@endsection
