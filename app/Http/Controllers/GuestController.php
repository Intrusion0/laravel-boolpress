<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
{
    public function home() {

        $posts = Post::all();

        return view('pages.home', compact('posts'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'nullable|string',
            'pubblication_date' => 'required|date',
            'like' => 'required|integer|min:0|max:1000000',
            'comments' => 'required|integer|min:0|max:1000000'
        ]);

        Post::create($data);

        return redirect()->route('home');
    }
}
