<div>
    <h2>Upload Image</h2>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image">
        <button type="submit">Upload Image</button>
    </form>
</div>