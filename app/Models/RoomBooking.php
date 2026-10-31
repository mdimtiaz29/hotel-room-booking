<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Room;
class RoomBooking extends Model
{
    //
    public $timestamps = true;
     protected $fillable = [
        'user_id',
        'room_id',
        'checkin',
        'checkout',
        'adult',
        'children'
    ];

        public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function review(){
    return $this->hasOne(Review::class);
}
}
