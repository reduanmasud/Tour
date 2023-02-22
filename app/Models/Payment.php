<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'tour_id',
        'trx_id',
        'total_amount',
        'mobile',
        'confirmed'
    ];


    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
