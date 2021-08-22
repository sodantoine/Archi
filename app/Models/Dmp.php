<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dmp extends Model
{
    use HasFactory;
    public function domaine()
    {
        return $this->belongsTo('App\Domaine','domaine_id');
    }
    public function expert()
    {
        return $this->belongsTo('App\Personne','expert_id');
    }
    public function auteur()
    {
        return $this->belongsTo('App\Personne','auteur_id');
    }
    public function partenaire()
    {
        return $this->belongsTo('App\Partenaire','pat_id');
    }
    public function typemission()
    {
        return $this->belongsTo('App\TypeMission','type_mission_id');
    }
}
