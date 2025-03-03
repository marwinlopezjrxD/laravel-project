{{-- Display database data on UI (DATABASE)--}}
<div>
    <h1>Users List</h1>
    {{-- show data --}}
    {{-- {{print_r($users)}} --}}

    {{-- show data in a tabular format --}}
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        {{-- use <tr> tag inside foreach loop --}}
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
        @endforeach
    </table>
</div>
