<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'user_id',
        'time_in',
        'time_out',
        'amount',
        'amount_per_day',
        'amount_per_hour',
        'file_path'
    ];

    public function jobs() 
    {
        return $this->hasMany(Job::class);
    }

    public function users() 
    {
        return $this->hasMany(User::class, 'id');
    }
}
