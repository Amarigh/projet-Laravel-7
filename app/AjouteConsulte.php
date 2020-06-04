<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AjouteConsulte extends Pivot
{
    protected $table ='ajouter_consulter';


    
    public function stages()
    {

      return $this->belongsTo('App\Stage','stage_id');
       
       

   }  
   public function etudiants()
    {

      return $this->belongsTo('App\Etudiant','etudiant_id');
       
       

   } 
   public function offres()
    {

      return $this->belongsTo('App\Offre','offre_emploi_id');
       
       

   } 


   public function formations()
    {

      return $this->belongsTo('App\Formation','formation_id');
       
       

   } 

   public function ecoles()
   {

     return $this->belongsTo('App\Ecole','ecole_superieure_id');
      
      

  }

  public function actualites()
  {

    return $this->belongsTo('App\Actualite','actualite_id');
     
     

 }



}
