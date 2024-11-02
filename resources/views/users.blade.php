<div>
    I am Admin
    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>