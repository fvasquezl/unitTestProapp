{!! Form::Model($client, ['route'=>['admin.users.destroy',$client],'method'=>'Delete']) !!}
{!! Form::submit('Delete User', ['class' => 'btn btn-danger','onclick'=>"return confirm('Are you sure?')"]) !!}
{!! Form::close() !!}