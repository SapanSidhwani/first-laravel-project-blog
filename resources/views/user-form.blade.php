<div>
    <form action="{{url('/add-user')}}" method="post">
        <!-- 
            If you don't write it that will show 419 page expired error 
            It generates token
        -->
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="username" placeholder="John Doe">
        <br>

        <label for="skills">Skills</label>
        <br>
        <input type="checkbox" name="skills[]" id="php" value="php">
        <label for="php">PHP</label>
        <br>
        <input type="checkbox" name="skills[]" id="node" value="node">
        <label for="node">Node</label>
        <br>
        <input type="checkbox" name="skills[]" id="react" value="react">
        <label for="react">React</label>
        <br>

        <label for="age">Age</label>
        <input type="range" id="age" name="age" min="18" max="100">
        <br>

        <input type="checkbox" id="active" name="active">
        <label for="active">Active</label>
        <br>

        <!-- The name should be same for radio button -->
        <input type="radio" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label>
        <br>

        <button type="submit">Submit</button>
    </form>
</div>