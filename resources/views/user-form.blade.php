{{-- Form Validation | input validation | email | max | min | required --}}

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

<div>
    <h1>Add New User</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User name" name="username">
            {{-- inline style tag type of showing error --}}
            <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User email" name="email">
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User city" name="city">
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>
        {{-- checkbox type, choose one or multiple, or all --}}
        <div class="input-wrapper">
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
        <button>Add New User</button>
        </div>
    </form>
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
</style>
