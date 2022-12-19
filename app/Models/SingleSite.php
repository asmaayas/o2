<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleSite extends Model
{
    use HasFactory;
    protected $table= 'single_sites';
    protected $fillable=[
        'name_en',
        'name_ar',
        'main_image',
        'type',
        'dive_site',
        'depth',
        'access',
        'level',
        'overview',
        'read_more_link',
        'gallery_image_one',
        'gallery_image_two',
        'gallery_image_three',
        'gallery_image_four',
        'gallery_image_five',
        'gallery_image_six'
    ];
}
