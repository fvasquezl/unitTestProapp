@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Cars <p class="pull-right">There are {{$cars->total()}} rows</p></div>
                    {!! Alert::render() !!}
                    <div class="panel-body">
                        <a href="{{ route('client.car.create')}}" class="btn btn-danger pull-right" >Create New Car</a>
                        @include('clients.cars.partials.table')
                        {!! Form::open(['route'=>['client.car.destroy',':CAR_ID'],'method'=>'Delete', 'id'=>'form-delete']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
