<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "prenom",
        "datenais",
        "tel",
        "cin",
        "sport_id"
    ];
    public function sports()
    {
        return $this->belongTo(Sport::class);
    }
}
