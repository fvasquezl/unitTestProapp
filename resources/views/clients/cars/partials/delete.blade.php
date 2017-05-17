{!! Form::Model($user, ['route'=>['client.car.destroy',$user],'method'=>'Delete']) !!}
{!! Form::submit('Delete User', ['class' => 'btn btn-danger','onclick'=>"return confirm('Are you sure?')"]) !!}
{!! Form::close() !!}