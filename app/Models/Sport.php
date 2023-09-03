<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "time",
        "coach_id",
    ];
    public function coachs()
    {
        return $this->belongTo(Coach::class);
    }
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
    public function calendriers()
    {
        return $this->hasMany(Calendrier::class);
    }
}
