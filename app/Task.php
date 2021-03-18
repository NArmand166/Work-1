<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //protected $table='post';
    protected $fillable = [
        'task_name', 'description', 'user_id',
    ];
}
