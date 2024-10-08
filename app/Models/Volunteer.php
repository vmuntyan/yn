<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'photo',
        'registration_date',
        'phone',
        'email',
        'address',
        'user_id'
    ];

    protected $casts = [
        'registration_date' => 'datetime',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'skill_volunteer');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
