<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
    <thead>
    <tr>
        <td>ID</td>
        <td>model</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
        <tr data-id="{{$car->id}}">
            <td>{{ $car->id}}</td>
            <td>{{ $car->name}}</td>
            <td>
                @include('clients.cars.partials.buttons')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $cars->appends(Request::only(['search','role']))->links() !!}