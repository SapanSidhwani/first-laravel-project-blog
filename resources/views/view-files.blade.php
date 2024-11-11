<div>
    <a href="/upload">Upload more images</a>
    @foreach ($images as $img)
    <br>
    <img src="{{ url('/storage/'.$img->path) }}" style="width: 200px; height: 120px">
    <br>
    @endforeach
</div>