<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table ='formations';

    protected $fillable = [
        'titre','ville','entreprise','description','lien', 'durer', 'img','etudiant_id'
    ];
}
