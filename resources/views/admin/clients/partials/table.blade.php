<table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr data-id="{{$client->id}}">
            <td>{{ $client->id}}</td>
            <td>{{ $client->name}}</td>
            <td>{{ $client->email}}</td>
            <td>
                @include('admin.clients.partials.buttons')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $clients->appends(Request::only(['search','role']))->links() !!}