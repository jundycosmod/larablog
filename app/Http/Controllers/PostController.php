<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Repositories\Posts;
use Illuminate\Http\Request;


class PostController extends Controller {

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Post $posts) {

//        $posts = Post::latest()
//                ->filter(request(['month', 'year']))
//                ->get();
        $posts = $posts->all();
        
        
        $archives = Post::archives();
        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post) {

        return view('posts.show', compact('post'));
    }

    public function create() {

        return view('posts.create');
    }

    public function store() {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        //Post::create(request(['title', 'body']));
        auth()->user()->publish(
                new Post(request(['title', 'body']))
        );
        
        session()->flash('message', 'Your post has been published.');

        return redirect('/');
    }

}
