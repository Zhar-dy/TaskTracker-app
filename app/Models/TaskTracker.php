<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTracker extends Model
{
    use HasFactory;

    protected $table = "tasktracker";

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'status',
        'priority',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
