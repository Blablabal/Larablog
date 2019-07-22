<?php

namespace App;


class Comment extends Model
{
    public function post()
    {
    	return $this->Belongsto(Post::class);
    }

    public function user()
    {
    	return $this->Belongsto(User::class);
    }
}
