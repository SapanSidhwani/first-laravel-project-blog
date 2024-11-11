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

<style>
    .w-5.h-5 {
        width: 20px;
    }
</style>
<div>
    <h1>Hello, Sapan</h1>
    <h2>{{ @$testResult }}</h2>
    <form action="/search" method="get">
        <input type="text" name="search" id="search" placeholder="Search by name" value="{{ @$search }}">
        <button type="submit">Search</button>
    </form>
    <form action="/delete-multiple-students" method="post">
        @csrf
        <button type="submit">Delete</button>
        <table border="1">
            <thead>
                <tr>
                    <td>Sections</td>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $item->id }}" /></td>
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
    </form>
    <br><br>
    {{ $items->links() }}
</div>