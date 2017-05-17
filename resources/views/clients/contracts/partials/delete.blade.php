{!! Form::Model($car, ['route'=>['client.contracts.destroy',$car],'method'=>'Delete']) !!}
{!! Form::submit('Delete User', ['class' => 'btn btn-danger','onclick'=>"return confirm('Are you sure?')"]) !!}
{!! Form::close() !!}