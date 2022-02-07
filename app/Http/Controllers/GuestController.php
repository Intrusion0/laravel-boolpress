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
}
