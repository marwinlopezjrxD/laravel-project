<div>
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
</style>
