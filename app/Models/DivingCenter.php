<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivingCenter extends Model
{
    use HasFactory;
    protected $table='diving_centers';
    protected $fillable=[
        'name_en',
        'name_ar',
        'location',
        'image'
    ];
}
