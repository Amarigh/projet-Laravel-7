<?php

namespace App\Http\Controllers;

use App\Etablissement;
use App\Travaille;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return   ;
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $d['secteur_activite']=$request['secteuretravail'];
           $d['etudiant_id']=Auth::guard('web')->id();
           if($request['selectentreprise']=='autre')
           {
               $entreprise=new Etablissement();
               $entreprise->nom= $request['entreprise'];
               $entreprise->save();
               $d['entreprise_id']=$entreprise->id;

           }

           else
           {
                   $f=Etablissement::where('nom','like',$request['selectentreprise'])->limit(1)->get();
                   $d['entreprise_id']=$f[0]->id;
           }


          $crate= Travaille::create($d);


          return redirect()->route('profil.show',['secteuretravail'=>Auth::user()->id]);

    }
}
