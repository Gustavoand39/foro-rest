<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    protected $fillable = [
        'message', 'user_id', 'topic_id', 'date',
    ];

    protected $hidden = [
        'created_at', 'update_at',
    ];
}