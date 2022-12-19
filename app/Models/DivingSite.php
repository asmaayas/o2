<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivingSite extends Model
{
    use HasFactory;
    protected $table='diving_sites';
    protected $fillable=[
        'name_en',
        'name_ar',
        'depth',
        'access',
        'location',
        'image'
    ];
}
