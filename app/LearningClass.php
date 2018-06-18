<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningClass extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'name', 'description', 'avatar', 'cover', 'code'
    ];
}
