<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;


    protected $fillable = [
        'destination',
        'cost_per_person',
        'seat_number',
        'description',
        'images',
        'user_id',

    ];
    protected $casta = [
        'images' => 'array',
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function tour_images()
    {
        return $this->hasMany(TourImage::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
