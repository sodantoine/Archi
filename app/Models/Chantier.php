<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chantier extends Model
{
    use HasFactory;
    public function chefprojet()
    {
        return $this->belongsTo('App\Personne','chef_chantier');
    }
    public function auteur()
    {
        return $this->belongsTo('App\Personne','auteur_id');
    }
    public function projet()
    {
        return $this->belongsTo('App\Projet','id_projet');
    }
    public function materiaux()
    {
        return $this->belongsToMany('App\materiaux','materiel_chantiers','id_chantier','id_materiaux');
    }
}
