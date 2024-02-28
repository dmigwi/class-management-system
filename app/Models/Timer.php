<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'instructor',
        'started_at',
        'stopped_at',
    ];
}
