<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create() {

        $categories = Category::all();
        $tags = Tag::all();

        return view('pages.create', compact('categories', 'tags'));
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

        
        $post = Post::make($data);
        
        $category = Category::findOrFail($request->get('category_id'));
        $post->category()->associate($category);
        $post->save();


        $tag = Tag::findOrFail($request->get('tags'));
        $post->tags()->attach($tag);
        $post->save();

        return redirect()->route('home');
    }
}
