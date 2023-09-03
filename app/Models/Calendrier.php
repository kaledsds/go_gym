<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    use HasFactory;
    protected $fillable = [
        "date",
        "heure",
        "sport_id"

    ];
    public function sports()
    {
        return $this->belongTo(Sport::class);
    }
}
