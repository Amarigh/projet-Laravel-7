<?php

namespace App\Http\Controllers;

use App\Etablissement;
use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $d=Auth::guard('web')->id();
    //     return redirect("profil/$d") ;
        return  view('profil',['data'=>Etablissement::all(),'id'=>$d]);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0)
        {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['file']['size'] <= 20000000)
                {
                        // Testons si l'extension est autorisée
                        $infosfichier = pathinfo($_FILES['file']['name']);
                        $extension_upload = $infosfichier['extension'];
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
                        if (in_array($extension_upload, $extensions_autorisees))
                        {
                              // On peut valider le fichier et le stocker définitivement
                              move_uploaded_file($_FILES['file']['tmp_name'], "img/" . basename($_FILES['file']['name']));
                              $d=Etudiant::find(Auth::guard('web')->id());
                              $d->img=basename($_FILES['file']['name']);
                              $d->save();
                                
                        }
                }
      }
       
      if (isset($_POST['okprofil']))
      { 

           $d=Etudiant::find(Auth::guard('web')->id());
           $d->nom=$request['nom'];
           $d->prenom=$request['prenom'];
           $d->cne=$request['cne'];
           $d->cin=$request['cin'];
           $d->sex=$request['sex'];
           $d->diplome=$request['diplome'];
           $d->email=$request['email'];
           $d->save();
      }

      if (isset($_POST['enregistredipolome']))
      {

        $et=Etudiant::find(Auth::guard('web')->id());
        $et->diplome=$request['nomdiplome'];
           $et->save();

      }

           return redirect('/profil');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       return  view('profil',['data'=>Etablissement::all(),'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
