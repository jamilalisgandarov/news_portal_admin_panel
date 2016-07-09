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
        <th>Verify</th>
      </tr>
    </thead>
    <tbody>
        <?php $count=1 ?>
        @foreach($authors as $author)
            <tr>
                <td><?php echo $count;$count=$count+1 ?></td>
                <td>{{$author->first_name}}</td>
                <td>{{$author->last_name}}</td>
                <td>{{$author->email}}</td>
                <td><a href='/insert/{{$author->id}}' class="btn btn-success">Accept</a>&nbsp<a class="btn btn-danger" href='delete/{{$author->id}}'>Reject</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
