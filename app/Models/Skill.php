<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }

    public function volunteers()
{
    return $this->belongsToMany(Volunteer::class, 'skill_volunteer');
}

}