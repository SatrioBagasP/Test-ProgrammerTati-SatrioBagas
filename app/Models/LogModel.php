<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogModel extends Model
{
    use HasFactory;
    protected $table = 'logharian';
    protected $fillable = [
        'id_user',
        'judul',
        'desc',
        'isAccBidang',
        'isAccDinas',
    ];
}
