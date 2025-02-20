{{-- View in Laravel --}}
{{-- manually create a view file
     or type the command, php artisan make:view home(close server before typing the command)
--}}
{{-- <h1>Home Page</h1> --}}


{{-- Blade template in Laravel --}}
{{-- double curly braces is expression --}}
{{-- using blade template (double curly braces) --}}
{{-- <h1>{{$name}}</h1> --}}

{{-- using php tag --}}
{{-- <h1><(whitespace)?php echo $name?></h1> --}}

{{-- execute functions --}}
{{-- predefined functions in PHP --}}
{{-- rand() --}}
{{-- rand() displays random value --}}
{{-- <h1>{{rand()}}</h1> --}}

{{-- passing array function from controller to view --}}
{{-- <h1>{{$users}}</h1> --}}
{{-- throws an error, cannot print array directly --}}
{{-- need to print string type first  --}}
{{-- <h1>{{print_r($users)}}</h1> --}}

{{-- print one value from the array --}}
{{-- <h1>{{print_r($users[0])}}</h1> --}}

{{-- how to use if else condition --}}
{{--
<div>
    @if($name == 'ming')
        <h2>this is ming</h2>
    @elseif($name == 'hue')
        <h2>this is hue</h2>
    @else
        <h2>other user</h2>
    @endif
</div> --}}

{{-- how to use for loop --}}
{{-- <div>
    @for($i = 0; $i <= 10; $i++)
        <h4>{{$i}}</h4>
    @endfor
</div> --}}

{{-- how to use foreach loop --}}
{{--
<div>
    @foreach($users as $user)
        <h3>{{$user}}</h3>
    @endforeach
</div> --}}

{{-- ------------------------------------------------------------------------------- --}}

{{-- include view in laravel --}}

{{-- Manually create a subview or make a subview on command line --}}
{{-- php artisan make:view common.header --}}
{{-- php artisan make:view common.inner --}}

{{-- include subview --}}
{{-- @include('common.header') --}}
{{-- <h1>Home Page</h1> --}}
{{-- include another subview and pass data--}}
{{-- @include('common.inner', ['page' => 'This is home page']) --}}
{{-- include subview with a loop --}}

{{-- if not exist, throw 404 not found  --}}
{{-- @include('common.abc', ['page' => 'This is home page']) --}}

{{-- use includeIf, no error --}}
{{-- check file if existing or not --}}
{{-- not exist, throw 404 --}}
{{-- @includeIf('common.abc', ['page' => 'This is home page']) --}}
{{-- exist, show view --}}
{{-- @includeIf('common.inner', ['page' => 'This is home page']) --}}

