<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
use App\Models\User;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'unit_id',
        'user_id',
        'read_at',
        'created_at',
    ];

    public function sender() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function unit() {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }
}