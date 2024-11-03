<div>
    <h1>Student Details</h1>
    <form action="/edit-student/{{ $studData->id }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $studData->name) }}">
        <br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email', $studData->email) }}">
        <br>

        <button type="submit">Update</button>
    </form>
</div>