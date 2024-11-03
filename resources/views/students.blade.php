@if (session('success'))
<script>
    alert( "{{ session('success')  }}"  );
</script>
@endif

@if (session('error'))
<script>
    alert("{{ session('error') }}");
</script>
@endif

<div>
    <h1>Hello, Sapan</h1>
    <h2>{{ $testResult }}</h2>
    <table border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="/delete-student/{{ $item->id }}" type="button">Delete</a>
                    <a href="/student-details/{{ $item->id }}" type="button">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>