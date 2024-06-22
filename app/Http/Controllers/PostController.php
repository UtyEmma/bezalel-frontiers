<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

    function index(Request $request){
        $posts = Post::whereStatus(Status::ACTIVE)
                    ->when($request->search, fn($query, $keyword) => $query->where('title', 'LIKE', "%$keyword%")->where('content', 'LIKE', "%$keyword%"))
                    ->when($request->tag, fn($query, $tag) => $query->where('tags', 'LIKE', "%$tag%"))
                    ->paginate(5);

        $tags = collect(Post::whereStatus(Status::ACTIVE)->get('tags')
                        ->map(fn($post) => $post->tags)
                        ->reduce(function($post, $carry) {
                            foreach($post as $value) $carry[] = $value;
                            return $carry;
                        }, []))->unique();

        return view('posts.index', compact('posts', 'tags'));
    }

    function show(Post $post){
        $posts = Post::whereNot('id', $post->id)
                    ->whereStatus(Status::ACTIVE)
                    ->latest()
                    ->limit(5)
                    ->get();
                    
        return view('posts.single', compact('post', 'posts'));
    }

}
