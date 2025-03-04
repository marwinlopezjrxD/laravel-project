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

{{-- ------------------------------------------------------------------------------- --}}

{{-- Form Validation | input validation | email | max | min | required --}}

{{-- <div>
    {{-- these errors shows all at the top, cannot be used for multiple fields(too messy) --}}
    {{-- test/check for errors --}}
    {{-- {{print_r($errors)}} --}}

    {{-- using loops --}}
    {{-- @if($errors->any())
    @foreach ($errors->all() as $error)
    <div style="color: red;">{{$error}}</div>
    @endforeach
    @endif --}}
    {{--
    shows this message if all inputs or one input are left blank

    The username field is required.
    The email field is required.
    The city field is required.
    The skills field is required.
    --}}


{{-- </div>
--}}

{{-- <div>
    <h1>Add New User</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User name" name="username">
            {{-- inline style tag type of showing error --}}
            {{-- <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email">
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User city" name="city">
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div> --}}
        {{-- checkbox type, choose one or multiple, or all --}}
        {{-- <div class="input-wrapper">
            <h4>Skills</h4>
            <input type="checkbox" name="skills[]" id="php" value="php">
            <label for="php" >PHP</label>
            <input type="checkbox" name="skills[]" id="java" value="Java">
            <label for="java" >Java</label>
            <input type="checkbox" name="skills[]" id="node" value="Node">
            <label for="node" >Node</label>
            <span style="color: red;">@error('skills'){{$message}}@enderror</span>
        <div class="input-wrapper">
        {{-- submit form button --}}
        {{-- <button>Add New User</button>
        </div>
    </form>
</div> --}}
{{--
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

{{-- ------------------------------------------------------------------------------- --}}


{{-- Custom Validation Message | Advanced validation feature --}}

<div>
    {{-- these errors shows all at the top, cannot be used for multiple fields(too messy) --}}
    {{-- test/check for errors --}}
    {{-- {{print_r($errors)}} --}}

    {{-- using loops --}}
    {{-- @if($errors->any())
    @foreach ($errors->all() as $error)
    <div style="color: red;">{{$error}}</div>
    @endforeach
    @endif --}}
    {{--
    shows this message if all inputs or one input are left blank

    The username field is required.
    The email field is required.
    The city field is required.
    The skills field is required.
    --}}


</div>

{{-- <div>
    <h1>Add New User</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User name" name="username" value="{{old('username')}}"
            class="{{$errors->first('username')?'input-error':''}}" >
            {{-- Get old value - value="{{old('name')}}"
            ||   change input color if invalid - class="{{$errors->first('username')?'input-error':''}}" --}}
            {{-- <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email" value="{{old('email')}}"
            class="{{$errors->first('email')?'input-error':''}}" >
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User city" name="city" value="{{old('city')}}"
            class="{{$errors->first('city')?'input-error':''}}" >
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
        {{-- submit form button --}}
        {{-- <button>Add New User</button>
        </div>
    </form>
</div> --}}
{{-- <style>
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
    .input-error{
        border: 1px solid red;
        color: red;
    }
</style> --}}

{{-- URL Generation
{{-- home.blade.php --}}
{{-- <div>
    <h1>Home Page</h1>
    {{-- get the current URL
    <h3>{{URL::current()}}</h3>
    {{-- yourURL/home --}}
    {{-- get the full URL --}}
    {{-- <h3>{{URL::full()}}</h3> --}}

    {{-- url function --}}
    {{-- <h3>{{url()->current()}}</h3> --}}
    {{-- yourURL/home --}}
    {{-- get the full URL --}}
    {{-- <h3>{{url()->full()}}</h3> --}}

    {{-- get the previous URL --}}
    {{-- <a href="/about">About Page</a> --}}

    {{-- make link URL --}}
    {{-- <a href="{{URL::to('about')}}">About Page</a> --}}

    {{-- make URL with child path --}}
    {{-- <a href="{{URL::to('about',['ming'])}}">About Page(child URL)</a> --}}
{{-- </div> --}}

{{-- URL Generation --}}
{{-- <div>
    <h1>About Page</h1>
    {{-- get the previous URL --}}
  {{-- Last URL ------>>  {{URL::previous()}}
</div> --}}

{{-- URL Generation --}}
{{-- about.blade.php --}}
{{-- <div>
    <h1>About Page</h1>
    {{-- get the previous URL --}}
  {{-- Last URL ------>>  {{URL::previous()}} --}}
{{-- </div> --}}

{{-- URL Generation --}}
{{-- welcome.blade.php --}}
{{-- <h1>Welcome Page</h1>
<a href="/about">About Page</a> --}}

{{-- Name Routes --}}
{{-- welcome.blade.php --}}
{{-- <h1>Welcome Page</h1>

<a href="{{route('hm')}}">Go to Home</a> --}}

{{-- // Name Routes
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use this path to use the controller
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('hm', 'home');
// Route::view('home/profile/user', 'home');

// go to home page(to view home.blade.php, use this route)
// use now of name routes(to avoid broken links, typo, can cause error, etc)
Route::view('home/profile/user', 'home')->name('hm');

// passing dynamic parameter to the route
Route::view('home/username/{name}', 'home');

// how to use the short name(exampleshortname) Route::view('home/username/{name}', 'home')->('exampleshortname');
// and how to pass this {name} dynamic parameter
                        // this key
Route::view('home/username/{name}', 'home')->name('user');

// How to use name route from controller
Route::get('show', [HomeController::class, 'show']);
// typing yourURL/show redirects to yourURL/home/profile/user

// define the route name for passing of dynamic parameter {name}
Route::get('user', [HomeController::class, 'user']);

// example of name routes usage(too many routes, define a small name to a route instead of this)
// Route::view('home/profile/user', 'home');

// use of name routes example:
// Route::view('home/profile/user', 'home')->name('hm');

// how to use name routes with real examples:
// make view and controller first
// view: php artisan make:view home
// view: php artisan make:controller HomeController --}}

{{-- -------------------------------------------------------
{{-- Route Group with Prefix --}}
{{--
<div>
    <h1>Home View</h1>
</div> --}}

{{-- -------------------------------------------- --}}

{{-- Display database data on UI (DATABASE)--}}

{{-- users.blade.php(#27) --}}

{{-- <div>
    <h1>Users List</h1>
    {{-- show data --}}
    {{-- {{print_r($users)}} --}}

    {{-- show data in a tabular format --}}
    {{-- <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        {{-- use <tr> tag inside foreach loop --}}
        {{-- @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
        @endforeach
    </table>
</div> --}}

{{-- -------------------------------------------------------------- --}}

{{-- #28 Eloquent Model --}}
{{-- display data from the view --}}
{{-- <div>
    <h1>Student List</h1>
    {{-- pass all data --}}
    {{-- {{print_r($data)}} --}}

    {{-- show students data in a tablular format --}}
    {{-- <table border="1">
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
{{-- </div> --}}


{{-- -------------------------------------------------------------- --}}

{{-- #30 Http Client --}}
{{-- user.blade.php --}}

{{-- <div>
    <h1>User Data</h1>
    {{-- passing of data on the Http Client(JSON) --}}
    {{-- <ul>
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
</div> --}}
