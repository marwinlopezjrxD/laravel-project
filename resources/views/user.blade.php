{{-- #34 Laravel Route methods --}}
{{-- Part 2 --}}
<div>
    <h1>User Form</h1>
    {{-- two methods, get and post, can use other methods also --}}
    {{-- get - simple submitting of data but unsafe and insecure
         post - secure way of submitting a form
         put - throws the function of get because by default,
         HTML form support only two methods, get and post.
         if you put any method such as put, patch, delete, options, etc,
         by default, it will understand that this is get method only

         To use put method, use the ff:
         <input type="hidden" name="_method" value="PUT">
         methos is "post" only.
         this request will go to the this Route::put method
         with the user URL and the put method of UserController

         To use put method, use the ff:
         <input type="hidden" name="_method" value="DELETE">

         --}}

         {{-- Part 2 --}}
         {{--

         The get method does also get the inputted fields of the user
         using the any() laravel route methods

         whenever the method is either get, post, put, or delete
         it will show the route method of any
         Route::any('user',[UserController::class,'any']);
         on web.php(routes folder)

         --}}

    {{-- get, post, put, and delete method on form --}}
    <form action="user" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="user" placeholder="enter name">
        @csrf
        <br>
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br>
        <br>
        <button>Submit</button>
    </form>
    {{-- submitting this form will throw an error
    The POST method is not supported for route user. Supported methods: GET, HEAD.
    we also need to define the post also using Route::post on routes folder --}}
</div>
