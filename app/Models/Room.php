<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    protected $fillable = [
        'room_id',
        'host_id',
        'host_name',
        'audience_count',
        'room_type',
        'room_status',
        'song_id',
    ];
}
