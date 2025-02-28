{{-- components --}}
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
</style>
