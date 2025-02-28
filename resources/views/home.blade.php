{{-- URL Generation --}}
<div>
    <h1>Home Page</h1>
    {{-- get the current URL
    <h3>{{URL::current()}}</h3>
    {{-- yourURL/home --}}
    {{-- get the full URL --}}
    {{-- <h3>{{URL::full()}}</h3> --}}

    {{-- url function --}}
    <h3>{{url()->current()}}</h3>
    {{-- yourURL/home --}}
    {{-- get the full URL --}}
    <h3>{{url()->full()}}</h3>

    {{-- get the previous URL --}}
    {{-- <a href="/about">About Page</a> --}}

    {{-- make link URL --}}
    <a href="{{URL::to('about')}}">About Page</a>

    {{-- make URL with child path --}}
    <a href="{{URL::to('about',['ming'])}}">About Page(child URL)</a>
</div>
