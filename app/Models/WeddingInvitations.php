<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class WeddingInvitations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rsvp_join',
        'rsvp_count',
        'rsvp_reason',
        'message_name',
        'message_from',
        'message_data',
        'timestamp'
    ];
    
    protected $dates = ['created_at', 'updated_at'];
}
