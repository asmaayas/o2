<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllSite extends Model
{
    use HasFactory;
    protected $table='all_sites';
    protected $fillable=[
        'title_en',
        'title_ar',
        'site_name_en',
        'site_name_ar',
        'location'
    ];
}
