@extends('layouts.main-layout')
@section('content')
    
    @guest

    <div>
        Non sei loggato! Registrati o fai il login
    </div>

    @else

    <form class="container-edit" action="{{ route('post.update', $post->id) }}" method="POST">

        @method('POST')
        @csrf

        <h2>Aggiorna il post</h2>

        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $post->title }}">
        <label for="author">Author</label>
        <input type="text" name="author" value="{{ $post->author }}">
        <label for="description">Description</label>
        <textarea type="text" name="description"> {{ $post->description }} </textarea>
        <label for="pubblication_date">Pubblication Date</label>
        <input type="date" name="pubblication_date" value="{{ $post->pubblication_date }}">
        <label for="like">Like</label>
        <input type="number" name="like" value="{{ $post->like }}">
        <label for="comments">Comments</label>
        <input type="number" name="comments" value="{{ $post->comments }}">
        
        <label for="category_id">Category</label>
        <select class="form-select" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    @if ($category->id == $post->category->id)
                        selected
                    @endif
                    >{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="tags">Tags</label>
        <div class="container-tags">
            @foreach ($tags as $tag)
                <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                    @foreach ($post->tags as $postTag)
                        @if ($postTag->id == $tag->id)
                            checked
                        @endif
                    @endforeach
                >{{ $tag->name }} <br>
            @endforeach
        </div>

        <input class="btn btn-success" type="submit" value="AGGIORNA">

    </form>

    @endguest

@endsection