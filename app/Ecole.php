<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    protected $table ='ecoles_superieures';

    protected $fillable = [
        'titre','ville','description','lien', 'img','etudiant_id'
    ];

    public function etudiant()
    {

        return $this->belongsTo('App\Etudiant','etudiant_id');
        
      

    } 
}
