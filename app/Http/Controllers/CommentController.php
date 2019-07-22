<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post)
    {
    	$this->validate(request(),["body" => "required|min:2"]);
    	
    	$comm = new Comment([
            'body' => request('body'),
            'post_id' => $post->id
        ]);

    	auth()->user()->publish_comment($comm);

    	return back();

    }
}
