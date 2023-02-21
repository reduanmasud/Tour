<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    protected $fillable = [
        'email',
        'full_name',
        'mobile',
        'number_of_persons',
        'tour_id',
        'paid'
    ];

    // protected $primaryKey = 'moblile';
    // public $incrementing = false;

    use HasFactory;
}
