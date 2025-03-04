{{-- #32 Eloquent Model Query Builder --}}
<div>
    <h1>User Data</h1>
    {{-- show data in a tabular format --}}
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
    @endforeach
    </table>
</div>
