{{-- #36 Session in laravel --}}
<div>
    <h1>Profile Page</h1>
    {{-- apply session in this profile view URL --}}
    {{-- <h2>{{session('user')}}</h2> --}}
    {{-- if condition for login --}}
    @if (session('user'))
    <h2>Welcome, {{session('user')}}</h2>
    @else
    <h2>No user found in session <a href="login">login</a> </h2>
    @endif
</div>
{{-- make logout functionality --}}
{{-- to remove the session --}}
<a href="logout">Logout</a>

{{-- how to know if allData session is stored --}}

{{-- will not work
Error: htmlspecialchars(): Argument #1 ($string) must be of type string, array given
--}}
{{-- user print_r --}}
{{-- {{print_r(session('allData'))}} --}}
{{-- get only one data --}}
<br>
{{-- will input the name with(1) --}}
{{-- {{print_r(session('allData')['user'])}} --}}
{{-- get other data --}}
{{-- {{print_r(session('allData')['password'])}} --}}
