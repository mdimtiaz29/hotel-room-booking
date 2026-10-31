<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomPhoto extends Model
{
    //


    protected $table = 'roomphotos';

    protected $fillable = [
        'photoname',
        'room_id'
    ];
    public function Room()
    {
        return $this->belongsTo(Room::class);
    }
}
