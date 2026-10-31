<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuery extends Model
{
    //
     protected $table = 'user_queries';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'seen'
    ];
}
