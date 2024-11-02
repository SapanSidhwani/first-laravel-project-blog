<div>
    <h1>Hello, Sapan</h1>
    <h2>{{ $testResult }}</h2>
    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
