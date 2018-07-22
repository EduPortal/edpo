<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function personal_information(){
        return $this->hasOne(PersonalInformation::class);
    }

    public function hobby(){
        return $this->hasOne(Hobby::class);
    }

    public function learning_classes(){
        return $this->hasMany(LearningClass::class);
    }

    public function student_learning_classes(){
        return $this->belongsToMany(LearningClass::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','registration_number', 'phone', 'email', 'answer_1', 'answer_2', 'answer_3', 'gender','occupation', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
