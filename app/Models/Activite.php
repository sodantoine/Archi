<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    public function auteur()
    {
        return $this->belongsTo('App\Personne','id_auteur');
    }
    public function projet()
    {
        return $this->belongsTo('App\Projet','id_projet');
    }
    public function engagements()
    {
        return $this->hasMany('App\Engagement','id_activite');
    }
}
