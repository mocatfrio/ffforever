<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class WeddingInvitations extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'waktu',
        'profesi',
        'pesan',
        'hadir',
        'jumlah',
        'alasan',
    ];
    
    protected $dates = ['created_at', 'updated_at'];
}
