<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
    	$posts = $tag->posts;

    	return view('post.index', compact('posts'));
    }
}
