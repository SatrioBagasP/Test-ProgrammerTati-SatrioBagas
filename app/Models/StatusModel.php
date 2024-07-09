<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $fillable = [
        'status',
    ];

     // Relasi dengan logharian melalui isAccDinas
     public function statusdinas()
     {
         return $this->hasMany(LogModel::class, 'isAccDinas');
     }

     // Relasi dengan logharian melalui isAccBidang
     public function statusbidang()
     {
         return $this->hasMany(LogModel::class, 'isAccBidang');
     }
}
