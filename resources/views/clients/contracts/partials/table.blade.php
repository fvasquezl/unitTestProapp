<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
    <thead>
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($contracts as $contract)
        <tr data-id="{{$contract->id}}">
            <td>{{ $contract->id}}</td>
            <td>{{ $contract->name}}</td>
            <td>
                @include('clients.contracts.partials.buttons')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $contracts->appends(Request::only(['search','role']))->links() !!}