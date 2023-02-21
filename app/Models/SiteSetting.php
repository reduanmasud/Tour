<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_image',
        'site_title',
        'site_bkash',
        'site_nagat',
        'site_address',
        'site_icon',
        'site_mobile',
        'site_email',
        'site_facebook',
        'site_twitter',
        'site_instragram',
        'site_linkedin',
    ];
}
