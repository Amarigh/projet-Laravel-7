<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Etudiant extends Authenticatable
{
    protected $table ='etudiants';


    protected $fillable = [
        'nom','prenom','cne','cin','naissance', 'email', 'password','tel','sex','diplome','date_diplome',
    ];

    // les experinces d'un etudiant
         // assoction entre etudiant et Stage  
    public function stages()
    {

        return $this->belongsToMany('App\Stage','App\AjouteConsulte','etudiant_id','stage_id')
        
        ->withPivot([
            'created_at',
            'updated_at',
        ]);

    }  

    // assoction entre etudiant et offre d'emploi
    public function offre()
    {

        return $this->belongsToMany('App\offre','App\AjouteConsulte','etudiant_id','offre_emploi_id')
        
        ->withPivot([
            'created_at',
            'updated_at',
        ]);

    } 


  // assoction entre etudiant et formation
    public function formations()
    {

        return $this->belongsToMany('App\Formation','App\AjouteConsulte','etudiant_id','formation_id')
        
        ->withPivot([
            'created_at',
            'updated_at',
        ]);

    } 
 
       // assoction entre etudiant et ecoles superieures
    public function ecoles()
    {

        return $this->belongsToMany('App\Ecole','App\AjouteConsulte','etudiant_id','ecole_superieure_id')
        
        ->withPivot([
            'created_at',
            'updated_at',
        ]);

    } 

       // assoction entre etudiant et actualite
    public function actualites()
    {

        return $this->belongsToMany('App\Actualite','App\AjouteConsulte','etudiant_id','actualite_id')
        
        ->withPivot([
            'created_at',
            'updated_at',
        ]);

    } 

  //  relation  entre etudiant et ajouter_conselt
     public function ajoute()
     {

         return $this->hasMany('App\AjouteConsulte','etudiant_id');
        
        

     } 
     
     
     // assoction entre etudiant et etablisssement_entreprise

     public function travailles()
     {
 
        return $this->hasMany('App\travaille','etudiant_id');
 
     } 


}
