@extends('layouts.main-layout')
@section('content')
    
    <div class="container-home">
        
        @guest

        <h2>REGISTER</h2>
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" required>
            <input class="btn btn-success" type="submit" value="REGISTER">

        </form>

        <br><hr class="bg-white"><br>

        <h2>LOGIN</h2>
        <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input class="btn btn-success" type="submit" value="LOGIN">

        </form>

        @else

        <h2>POSTS LIST</h2>

        <span class="new-post">
            <a href="{{ route('create') }}">CREATE NEW POST</a>
        </span>

        <ol class="list-group list-group-numbered">
            @foreach ($posts as $post)
                <li class="list-group-item">Title: <span>{{ $post->title }}</span> - Author: <span>{{ $post->author }}</span></li>
            @endforeach
        </ol>

        @endguest

    </div>

@endsection