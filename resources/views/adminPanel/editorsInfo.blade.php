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
        <?php $count = 1?>
        @foreach((App\User::where('status',1)->get()) as $user)
            <tr>
                <td><?php echo $count;
$count = $count + 1 ?></td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->last_login_at}}</td>
                <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#gridSystemModal"> Delete </button></td>
            </tr>
            <div class="modal fade" tabindex="-1" role="dialog" id="gridSystemModal" aria-labelledby="gridSystemModalLabel">
             <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Warning</h4>
            </div>
            <div class="modal-body">
            <span>     Do you want to delete: <b> {{$user->first_name}} {{$user->last_name}} </b> ? </span>
            </div>
            <div class="modal-footer">
            <a  href='/user/delete/{{$user->id}}'>
                <button type="button" class="btn btn-danger">Delete</button>
            </a>
            <button type="button" class="btn btn-primary"  data-dismiss="modal">Back</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
        @endforeach
    </tbody>
  </table>

</div>

@endsection
