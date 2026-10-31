<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
     protected $fillable = [
        'name',
        'area',
        'price',
        'quantity',
        'adult',
        'children',
        'description',
        'features',
        'facilities',
        'status'
    ];
    public function allinfo()
    {
        return $this->hasOne(RoomPhoto::class);
    } 

    public function bookings()
{
    return $this->hasMany(RoomBooking::class);
}
public function reviews(){
    return $this->hasMany(Review::class);
}

}
