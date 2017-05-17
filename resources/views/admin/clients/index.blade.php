@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Users <p class="pull-right">There are {{$users->total()}} rows</p></div>
                    {!! Alert::render() !!}
                    <div class="panel-body">
                        <a href="{{ route('admin.clients.create')}}" class="btn btn-danger pull-right" >Create New Admin User</a>
                        @include('admin.clients.partials.search')
                        @include('admin.clients.partials.table')
                        {!! Form::open(['route'=>['admin.clients.destroy',':USER_ID'],'method'=>'Delete', 'id'=>'form-delete']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
