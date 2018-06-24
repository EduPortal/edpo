<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

	public function post(){
        return $this->belongsTo(Post::class);
    }

    protected $fillable = [
        'post_id', 'original_name', 'path', 'size', 'type'
    ];
}
