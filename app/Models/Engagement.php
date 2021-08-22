<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;
    public function activite()
    {
        return $this->belongsTo('App\Activite','id_activite');
    }
    public function auteur()
    {
        return $this->belongsTo('App\Personne','auteur_id');
    }
    public function validateur()
    {
        return $this->belongsTo('App\Personne','id_validateur');
    }
    public function personne()
    {
        return $this->belongsTo('App\Personne','id_pers');
    }
}
