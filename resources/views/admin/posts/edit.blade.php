@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Modifica il Post:{{ $post->title }}</h1>
            </div>
            <div class="col-4 text-left d-flex justify-content-end align-items-center">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            value="{{ old('title', $post->title) }}" name="title" aria-describedby="helpTitle">
                        <small id="helpTitle" class="form-text text-muted">Inserisci il titolo del post.</small>
                        @error('title')
                            <div id="title" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Imagine copertina articolo</label>

                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input @error('image') is-invalid @endif" id="image" >
                            <label class="custom-file-label" for="image">scegli immagine...</label>
                            @error('image')
                            <div id="image" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select name="category_id" class="custom-select @error('title') is-invalid @enderror">
                            <option selected>-- nessuna --</option>
                            @foreach ($categories as $category)
                                <option @if (old('category_id', $post->category_id) == $category->id) selected @endif value="{{ $category->id }}">
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        <small id="helpCategory" class="form-text text-muted">Seleziona la Categoria.</small>
                        @error('category_id')
                            <div id="category" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="d-block" for="content">Tag :</label>
                        @foreach ($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="tags[]"
                                    @if (in_array($tag->id, old('tags', $post->tags->pluck('id')->all()))) checked @endif type="checkbox"
                                    id="tag{{ $tag->id }}" value="{{ $tag->id }}">
                                <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label for="content">Contenuto</label>
                        <textarea class="form-control" id="content" name="content" rows="20" placeholder="Contenuto del post">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection