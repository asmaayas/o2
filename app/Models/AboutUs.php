<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $table ='about_us';
    protected $fillable=[
        'title_en',
        'title_ar',
        'description_title_en',
        'description_title_ar',
        'description_en',
        'description_ar'
    ];
}
