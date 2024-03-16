<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    use HasFactory;

    protected $fillable = [
        'occupation_name'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
