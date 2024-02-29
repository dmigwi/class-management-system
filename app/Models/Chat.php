<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;
use App\Models\User;

class Chat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'message',
        'unit_id',
        'sender_id',
        'recipient_id',
        'read_at',
        'created_at',
    ];

    public function sender() {
        return $this->hasOne(User::class, 'id', 'sender_id');
    }

    public function recipient() {
        return $this->hasOne(User::class, 'id', 'recipient_id');
    }

    public function unit() {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }
}