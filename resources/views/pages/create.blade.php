@extends('layouts.main-layout')
@section('content')
    
    @guest

    <div>
        Non sei loggato! Registrati o fai il login
    </div>

    @else

    <form action="{{ route('store') }}" method="POST">

        @method('POST')
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title">
        <label for="author">Author</label>
        <input type="text" name="author">
        <label for="description">Description</label>
        <input type="text" name="description">
        <label for="pubblication_date">Pubblication Date</label>
        <input type="date" name="pubblication_date">
        <label for="like">Like</label>
        <input type="number" name="like">
        <label for="comments">Comments</label>
        <input type="number" name="comments">
        <input type="submit" value="CREA">

    </form>

    @endguest

@endsection