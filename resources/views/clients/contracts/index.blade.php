@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contracts Index <p class="pull-right">There are {{$contracts->total()}} rows</p></div>
                    {!! Alert::render() !!}
                    <div class="panel-body">
                        <a href="{{ route('client.contracts.create',$car)}}" class="btn btn-danger pull-right" >Create New Contract</a>


                        @include('clients.contracts.partials.table')
                        {!! Form::open(['route'=>['client.contracts.destroy',':USER_ID'],'method'=>'Delete', 'id'=>'form-delete']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
