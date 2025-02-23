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

{{-- ------------------------------------------------------------------------------- --}}

{{-- Subview --}}

{{-- Manually create a subview or make a subview on command line --}}
{{-- php artisan make:view common.header --}}
{{-- php artisan make:view common.inner --}}

{{-- include subview --}}
{{-- @include('common.header')
<h1>Home Page</h1>
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

{{-- ------------------------------------------------------------------------------- --}}
{{-- components --}}
{{--
<x-message-banner msg="user signup done" class="success"/>
<x-message-banner msg="server down" class="error"/>
<x-message-banner msg="no product found" class="warning"/>
<h1>About PAge</h1>

<style>
    .success{
        background-color: lightgreen;
        color: green;
        padding: 3px 10px;
        margin: 10px;
        display: inline-block;
        border-radius: 2px;
    }
    .error{
        background-color: #ff000082;
        color: red;
        padding: 3px 10px;
        margin: 10px;
        display: inline-block;
        border-radius: 2px;
    }
    .warning{
        background-color: #ffa50094;
        color: orange;
        padding: 3px 10px;
        margin: 10px;
        display: inline-block;
        border-radius: 2px;
    }
</style> --}}


{{-- ------------------------------------------------------------------------------- --}}
{{-- Input fields and form submit  --}}
{{-- <div>
    <h2>Add new user</h2>
    <form action="addUser" method="post">
        @csrf <!-- this is a must for every form -->
        <div class="input-form">
            <input type="text" placeholder="enter your name" name="username">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter city" name="city">
        </div>
        <div class="input-form">
            <input type="text" placeholder="enter email" name="email">
        </div>
        <div class="input-form">
            <button>Add new User</button>

        </div>
    </form>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>

<style>
    input{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
    }
    button{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
    }
</style> --}}

{{-- Form handling with checkbox, radio button and dropdown --}}
{{-- <div>
    <h1>Add New User</h1>
    <form action="adduser" method="post">
        @csrf
        {{-- checkbox type, choose one or multiple, or all --}}
        {{-- <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php" >PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java" >Java</label>
            <input type="checkbox" name="skill[]" id="node" value="Node">
            <label for="node" >Node</label>
        </div>
        {{-- Radio type, can only choose one--}}
        {{-- <div>
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        {{-- range --}}
        {{-- <div>
            <h4>User Age</h4>
            <input type="range" name="age" id="age" max="100" min="18">
        </div>
        {{-- dropdown --}}
        {{-- <div>
            <h4>User City</h4>
            <select name="city">
                <option value="manila">Manila</option>
                <option value="makati">Makati</option>
                <option value="quezon">Quezon</option>
            </select>
        </div>
        {{-- submit form button --}}
        {{-- <button>Add New User</button>
    </form>
</div>  --}}
