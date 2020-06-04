<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travaille extends Model
{
    protected $table ='travailles';


    protected $fillable = [
      'etudiant_id','entreprise_id','secteur_activite'
  ];


    public function etudiants()
    {

      return $this->belongsTo('App\Etudiant','etudiant_id');  
       
   }

   public function etablissements()
   {

     return $this->belongsTo('App\Etablissement','etudiant_id');  
      
  }

}
