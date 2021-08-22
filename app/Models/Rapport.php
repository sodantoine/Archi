<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    public function projet()
    {
        return $this->belongsTo('App\Projet','id_projet');
    }
    public function typerapport()
    {
        return $this->belongsTo('App\Type_Rapport','id_type_rapport');
    }
    public function auteur()
    {
        return $this->belongsTo('App\Personne','id_pers');
    }

}
