<div>
    <form action="add-student" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <button type="submit">Register</button>
    </form>
</div>