<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->with(['author', 'mentors', 'media'])
            ->whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->paginate(8);

        return view('site.posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
         /*
        if($post->published_at === null) {
            abort(403, 'This post is not published yet.');
        }*/

        return view('site.posts.show', [
            'post' => $post,
        ]);
    }


}
