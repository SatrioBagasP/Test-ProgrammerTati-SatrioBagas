<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinsiModel extends Model
{
    use HasFactory;

    protected $table = 'table_provinsi';
    protected $fillable = [
        'code',
        'name',
        'coordinate_y',
        'coordinate_x',
        'google_place_id',
    ];
}
