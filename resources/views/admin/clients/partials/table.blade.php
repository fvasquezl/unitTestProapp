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
    @foreach($users as $user)
        <tr data-id="{{$user->id}}">
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>
                @include('admin.clients.partials.buttons')
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $users->appends(Request::only(['search','role']))->links() !!}