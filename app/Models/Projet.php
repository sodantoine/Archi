<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    public function obligations()
    {
        return $this->hasMany('App\Obligation','projet_id');
    }
    public function activites()
    {
        return $this->hasMany('App\Activite','id_projet');
    }
    public function auteur()
    {
        return $this->belongsTo('App\Personne','auteur_id');
    }
    public function client()
    {
        return $this->belongsTo('App\Client','client_id');
    }
    public function responsableprojet()
    {
        return $this->belongsTo('App\Client','responsable_id');
    }
}
