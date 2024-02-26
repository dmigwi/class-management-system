<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Timer;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'timer_id',
        'created_at',
    ];

    public function timer() {
        return $this->hasOne(Timer::class, 'id', 'timer_id');
    }
}
