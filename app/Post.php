<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function learning_class(){
        return $this->belongsTo(LearningClass::class);
    }

    public function attachments(){
        return $this->hasMany(Attachment::class);
    }
	
	public function comments(){
        return $this->hasMany(Comment::class);
    }

    protected $fillable = [
        'description','type','learning_class_id',
    ];
}
