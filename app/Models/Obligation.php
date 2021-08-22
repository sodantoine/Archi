<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obligation extends Model
{
    use HasFactory;
    public function auteur()
    {
        return $this->belongsTo('App\Personne','auteur_id');
    }
    public function projet()
    {
        return $this->belongsTo('App\Projet','projet_id');
    }
}
