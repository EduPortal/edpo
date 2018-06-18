<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public function user(){
        return $this->belongsTo(Hobby::class);
    }

    protected $fillable = [
       'user_id' ,'hobbies' , 'favourite_tv_shows' , 'favourite_movies' , 'favourite_games' , 'favourite_artists' , 'favourite_books' , 'favourite_writers' , 'favourite_interests'
    ];
}
