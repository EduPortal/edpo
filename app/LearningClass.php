<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningClass extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function students(){
        return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'user_id', 'name', 'description', 'avatar', 'cover', 'code'
    ];
}
