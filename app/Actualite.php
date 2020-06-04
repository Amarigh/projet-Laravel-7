<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $table ='actualites';


    protected $fillable = [
        'titre','discription','lien','img',
    ];

    public function etudiant()
    {

        return $this->belongsTo('App\Etudiant','etudiant_id');
        
       

    } 


}
