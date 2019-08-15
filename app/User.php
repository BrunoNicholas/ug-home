<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Models\Department;
use App\Models\Question;
use App\Models\Comment;

class User extends Authenticatable implements MustVerifyEmailContract
// class User extends Eloquent
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'telephone', 'location', 'gender',
        'age', 'date_of_birth', 'maritual_status', 'profile_image','occupation', 
        'nationality', 'bio', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The relationship method for comments.
     *
     * as comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * The relationship method for departments.
     *
     * as departments.
     */
    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    /**
     * The relationship method for questions.
     *
     * as questions.
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
