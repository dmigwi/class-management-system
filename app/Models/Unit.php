<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor',
        'name',
        'code',
        'semester',
        'year',
        'start_date',
        'end_date',
        'duration',
        'midterm_exam',
        'final_exam',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
