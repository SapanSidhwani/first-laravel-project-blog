<div>
    <h2>File Upload</h2>
    <form action="store-file" method="post" enctype="multipart/form-data">
        @csrf
        <label for="passport">Passport</label>
        <input type="file" name="passport" id="passport">
        {{ $errors->first('passport') }}
        <button type="submit">Upload File</button>
    </form>
</div>
