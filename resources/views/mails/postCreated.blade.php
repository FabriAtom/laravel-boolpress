<label for="">titolo del nuovo post:</label>
<h1>
    <a href="{{ route('admin.posts.show',$post) }}"></a>
   {{ $post->title }}
</h1>