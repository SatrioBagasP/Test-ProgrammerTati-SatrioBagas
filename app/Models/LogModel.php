<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogModel extends Model
{
    use HasFactory;
    protected $table = 'logharian';
    protected $fillable = [
        'user_id',
        'judul',
        'desc',
        'isAccBidang',
        'isAccDinas',
    ];
  // Relasi dengan logharian melalui isAccDinas
  public function statusdinas()
  {
      return $this->belongsTo(StatusModel::class, 'isAccDinas');
  }

  // Relasi dengan logharian melalui isAccBidang
  public function statusbidang()
  {
      return $this->belongsTo(StatusModel::class, 'isAccBidang');
  }
}
