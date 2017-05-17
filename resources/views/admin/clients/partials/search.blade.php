{!! Form::model(Request::all(),['route'=>'admin.clients.index','method'=>'GET','class'=>'form-inline']) !!}
{!! Field::text('search',null,['placeholder'=>'Search','label' => '']) !!}
<button type="submit" class="btn btn-primary" style="margin-top: 23px;">Submit</button>
{!! Form::close() !!}
<br>