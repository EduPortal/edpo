<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{

	public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'birthday', 'birthplace', 'website', 'country', 'province', 'city', 'description', 'facebook', 'twitter', 'linkedin', 'google_plus', 'marital_status', 'avatar'
    ];
}



	