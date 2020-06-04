<?php

namespace App\Http\Controllers;

use App\Etablissement;
use App\Etudiant;
use App\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('experience.formation',['data'=>Formation::orderBy('id', 'desc')->get(),'etudiant'=>Etudiant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.ajoutformation',['data'=>Etablissement::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        // $data=[
        //     'titre'=>'bail|min:4|max:255',
        //   'ville'=>'bail|min:4|max:255',
        //   'description'=>'bail|min:10|max:255',
        //   'durer'=>'bail|min:3|max:255'
        // ];
        // $valiadtionData=$request->validate($data);
      
        $donne=[
            'titre' => $request['titre'],
            'ville' => $request['ville'],
            'description' =>$request['description'],
            'durer' => $request['durer']
            
          ];

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
                          $donne['img']=basename($_FILES['file']['name']);
	                        
	                }
	        }
  }
  else  $donne['img']=NULL;


  if($_POST['lien'])
  {
    $donne['lien']=$request['lien'];

  }
  else  $donne['lien']=NULL;

  if($_POST['selectentreprise']=='enligne')
  {
    $donne['entreprise']=NULL;

  }

  elseif($_POST['selectentreprise']!='autre')
  {

    $donne['entreprise']= $request['selectentreprise'];
  }

  else{

          if($request['entreprise'])
          {
            $donne['entreprise']=$request['entreprise'];
            $dt=new Etablissement();
            $dt->nom=$request['entreprise'];
            $dt->save();

          }

          else  $donne['entreprise']=NULL;

  }

  $donne['etudiant_id']=Auth::guard('web')->id();

  $child=Formation::create($donne);

  return redirect('/formation');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
