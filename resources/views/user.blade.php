{{-- #30 Http Client --}}
<div>
    <h1>User Data</h1>
    {{-- passing of data on the Http Client(JSON) --}}
    <ul>
        <li>
            <span>Name: </span><span><b>{{$data->name}}</b></span>
        </li>
        <li>
            <span>Email: </span><span><b>{{$data->email}}</b></span>
        </li>
        <li>
            <span>Phone: </span><span><b>{{$data->phone}}</b></span>
        </li>
        <li>
            <span>Website: </span><span><b>{{$data->website}}</b></span>
        </li>
    </ul>

    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
