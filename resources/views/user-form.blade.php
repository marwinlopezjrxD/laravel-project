<div>
    <h1>Add New User</h1>
    <form action="adduser" method="post">
        @csrf
        {{-- checkbox type, choose one or multiple, or all --}}
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php" >PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java" >Java</label>
            <input type="checkbox" name="skill[]" id="node" value="Node">
            <label for="node" >Node</label>
        </div>
        {{-- Radio type, can only choose one--}}
        <div>
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        {{-- range --}}
        <div>
            <h4>User Age</h4>
            <input type="range" name="age" id="age" max="100" min="18">
        </div>
        {{-- dropdown --}}
        <div>
            <h4>User City</h4>
            <select name="city">
                <option value="manila">Manila</option>
                <option value="makati">Makati</option>
                <option value="quezon">Quezon</option>
            </select>
        </div>
        {{-- submit form button --}}
        <button>Add New User</button>
    </form>
</div>
