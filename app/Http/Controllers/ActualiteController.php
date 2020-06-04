<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('experience.actualite');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $donner=[

            'titre'=>$request['titre'],
            'discription'=> $request['discription'],
            'lien'=> $request['lien']
 
         ];
 
         if ($request->hasFile('file') )
         {
                      $file = $request->file('file');
 
                      if ($size=$file->getSize() <= 5000000)
                      {
                
                         $extension = $file->getClientOriginalExtension();
                         $filename = $file->getClientOriginalName();
                         
 
                         // $filename = time().'.'.$extension;
                         
                      
                     
                         $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
                         if (in_array($extension, $extensions_autorisees))
                         {
                         
                             $file->move(public_path("img"),$filename);
                              $donner['img']=$filename;
                                 
                         }
 
                     }
                 
       }
       else  $donner['img']=null;
       
       
       $Actualite=Actualite::create($donner);
 
       return redirect()->route('home');
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
