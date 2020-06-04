<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $table ='etablissements_entreprises';

    protected $fillable = [
        'nom'
    ];
}
