<?php

namespace App\Http\Controllers;

use App\Etablissement;
use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data =Etudiant::all();
        // return view('etudiant.index',['data'=>$data]);
        return view('etudiant.index',['data'=>Etudiant::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etudiant.create');
    }



/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modifier_image(Request $request)
    {
        if ($request->hasFile('file') )
        {
                     $file = $request->file('file');

                     if ($size=$file->getSize() <= 1000000)
                     {
               
                        $extension = $file->getClientOriginalExtension();
                        $filename = $file->getClientOriginalName();
                        

                        // $filename = time().'.'.$extension;
                        
                     
                    
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
                        if (in_array($extension, $extensions_autorisees))
                        {
                        
                            $file->move(public_path("img"),$filename);
                              $d=Etudiant::find(Auth::guard('web')->id());
                              $d->img=$filename;
                              $d->save();
                                
                        }

                    }
                
      }

      return redirect()->route('etudiant.show',['etudiant'=>Auth::id()]);
    }


/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enregistre_diplome(Request $request)
    {
        
  
          $et=Etudiant::find(Auth::guard('web')->id());
          $et->diplome=$request->nomdiplome;
          $et->date_diplome=$request->datediplome;
             $et->save();
  
        
  
             return redirect()->route('etudiant.show',['etudiant'=>Auth::id()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
         

        $donne=[
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'cne' => $data['cne'],
            'cin' => $data['cin'],
            'naissance' => $data['datenaissance'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tel' => $data['tel'],
            'sex' => $data['sex'],
            $donne['diplome']= $data['nomdiplome']

          ];



         $enregistre = Etudiant::create($donne);
          
     
         return redirect()->route('etudiant.index');   




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            return  view('etudiant.profil',['data'=>Etablissement::all(),'etudiant'=>Etudiant::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant=Etudiant::findorfail($id);
        return view('etudiant.edit',['etudiant'=>$etudiant]);
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
        $d=Etudiant::findorfail($id);
        $d->nom=$request['nom'];
        $d->prenom=$request['prenom'];
        $d->naissance=$request['naissance'];
        $d->cne=$request['cne'];
        $d->cin=$request['cin'];
        $d->sex=$request['sex'];
        $d->diplome=$request['diplome'];
        $d->tel=$request['tel'];
        $d->email=$request['email'];
        $d->save();
        return redirect()->route('etudiant.show',['etudiant'=>$d->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudiant::destroy($id);
        return redirect()->route('etudiant.index');
    }



    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('dashboard');
    //     }
    // }
}

