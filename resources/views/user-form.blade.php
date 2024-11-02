<style>
    .input-error {
        border: 1px solid red;
        margin: 3px;
        padding: 3px;
    }

    .input-error:hover {
        border: 1px solid red;
        margin: 10px;
        padding: 10px;
    }
</style>
<div>

    <!-- Loop through all errors -->
    <!-- 
        @if($errors->any())
        @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
        @endif
    -->
    <form action="{{url('/add-user')}}" method="post">

        <!--
            > To make the put request 
            
            In form tag method should be equal to "post":
            <input type="hidden" name="_method" value="PUT">
        -->
        <!-- 
            If you don't write it that will show 419 page expired error 
            It generates token
        -->
        @csrf

        <label for="name">Name</label>
        <!-- $errors->first('username'): Retrieves the first error message for the username field, if there is one. -->
        <!-- $errors->has('username'): Checks if there are any errors for the username field. -->
        <input type="text" id="name" name="username" placeholder="John Doe" value="{{old('username')}}"
            class="{{$errors->has('username') ? 'input-error' : ''}}">
        <span style="color: red">{{$errors->first('username')}}</span>
        <!-- <span style="color: red">@error('username') {{$message}} @enderror</span> -->
        <br>

        <label for="email">Email</label>
        <input type="text" id="email" name="useremail" placeholder="johndoe@mail.com" value="{{old('useremail')}}">
        <span style="color: red">@error('useremail') {{$message}} @enderror</span>
        <br>

        <label for="skills">Skills</label>
        <span style="color: red">@error('skills') {{$message}} @enderror</span>
        <br>
        <!-- old('skills', []) default is empty array -->
        <input type="checkbox" name="skills[]" id="php" value="php" {{ in_array('php', old('skills', [])) ? 'checked'
            : '' }}>
        <label for="php">PHP</label>
        <br>
        <input type="checkbox" name="skills[]" id="node" value="node" {{ in_array('node', old('skills', [])) ? 'checked'
            : '' }}>
        <label for="node">Node</label>
        <br>
        <input type="checkbox" name="skills[]" id="react" value="react" {{ in_array('react', old('skills', []))
            ? 'checked' : '' }}>
        <label for="react">React</label>
        <br>

        <label for="age">Age</label>
        <span style="color: red">@error('age') {{$message}} @enderror</span>
        <input type="range" id="age" name="age" min="18" max="100" value="{{old('age', 18)}}">
        <br>

        <input type="checkbox" id="active" name="active" {{ old('active') ? "checked" : "" }}>
        <label for="active">Active</label>
        <span style="color: red">@error('active') {{$message}} @enderror</span>
        <br>

        <!-- The name should be same for radio button -->
        <input type="radio" name="gender" value="male" {{ old('gender')=='male' ? 'checked' : '' }}>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" {{ old('gender')=='female' ? 'checked' : '' }}>
        <label for="female">Female</label>
        <span style="color: red">@error('gender') {{$message}} @enderror</span>
        <br>

        <button type="submit">Submit</button>
    </form>
</div>