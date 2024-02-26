<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;

class Timer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'unit_id',
        'started_at',
        'stopped_at',
    ];

    public function unit() {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }
}
