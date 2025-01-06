<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'banner_photo_url',
        'description',
        'title_1',
        'description_1',
        'feature_1',
        'feature_desc_1',
        'feature_2',
        'feature_desc_2',
        'feature_3',
        'feature_desc_3',
        'about_photo',
        'about_us',
    ];
}
