<?php

namespace App;

class Comment extends Model
{
    // $comment->post
    public function post() {
        
        $this->belongsTo(Post::class);
        
    }
    
    public function user() {
        
        $this->belongsTo(User::class);
        
    }
}
