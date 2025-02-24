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

<div>
    <h1>Add New User</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User name" name="username" value="{{old('username')}}"
            class="{{$errors->first('username')?'input-error':''}}" >
            {{-- Get old value - value="{{old('name')}}"
            ||   change input color if invalid - class="{{$errors->first('username')?'input-error':''}}" --}}
            <span style="color: red;">@error('username'){{$message}}@enderror</span>
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
    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>
