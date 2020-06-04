<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $table ='offres_emploi';

    protected $fillable = [
        'titre','ville','description','lien', 'img','etudiant_id','entreprise'
    ];

    public function etudiant()
    {

        return $this->belongsTo('App\Etudiant','etudiant_id');
        
      

    } 
}
