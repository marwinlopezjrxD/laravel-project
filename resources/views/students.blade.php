{{-- #28 Eloquent Model --}}
{{-- display data from the view --}}
<div>
    <h1>Student List</h1>
    {{-- pass all data --}}
    {{-- {{print_r($data)}} --}}

    {{-- show students data in a tablular format --}}
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
        </tr>
        @endforeach
    </table>

    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    {{-- nice quote btw --}}
</div>
