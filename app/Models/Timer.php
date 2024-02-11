<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'unit_id',
        'started_at',
        'stopped_at',
    ];
}
