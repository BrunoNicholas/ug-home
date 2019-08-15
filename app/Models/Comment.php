<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Question;
use App\Models\Report;
use App\User;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id',
        'responder',
        'comment',
        'status',
    ];

    /**
     * The string variable is for the table.
     *
     * @var array
     */
    protected $table = 'comments';
    
    /**
     * Belonds to relationship connects both 
     * this table and the questions table
     *
     */
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
    
    /**
     * Belonds to relationship connects both 
     * this table and the users table
     *
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
