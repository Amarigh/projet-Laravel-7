<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $table ='stages';

    protected $fillable = [
        'titre','ville','entreprise','description','lien', 'durer', 'img','etudiant_id'
    ];

    public function etudiant()
    {

        return $this->belongsTo('App\Etudiant','etudiant_id');
        
      

    } 
   
   
}
