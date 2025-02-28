<x-message-banner msg="user added successfully" class="success"/>
<x-message-banner msg="user logout successfully" class="success"/>
<x-message-banner msg="no user found" class="error"/>
<x-message-banner msg="some users are missing" class="warning"/>

<h1>Home Page</h1>

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
</style>
