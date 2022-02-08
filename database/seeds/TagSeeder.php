<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 15)->create()->each(function($tag){

            $posts = Post::inRandomOrder()->limit(rand(0, 5))->get();
            $tag->posts()->attach($posts);

            $tag->save();

        });
    }
}
