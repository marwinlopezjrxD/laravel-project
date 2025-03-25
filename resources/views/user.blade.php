{{-- #37 Flash Session in laravel --}}
<div>
    <h1>Add New User</h1>
    @if(session('message'))
        <span class="success-message">{{session('message')}}</span>
    @endif
    {{-- store session --}}
    {{-- {{session()->reflash('message')}} --}}

    @if(session('name'))
        <span class="success-message">{{session('name')}}</span>
    @endif
    {{session()->keep('name')}}
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter Email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter Phone">
        <br>
        <br>
        <button type="submit">Add New User</button>
    </form>
</div>

<style>
   .success-message{
       background-color: darkgreen;
       padding 2px 20px;
       margin-bottom: 10px;
       display: inline-block;
       border-radius: 2px;
   }
</style>
