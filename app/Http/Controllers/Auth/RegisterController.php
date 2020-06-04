<?php

namespace App\Http\Controllers\Auth;

use App\Etablissement;
use App\Etudiant;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session; 
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   

                $requet=[
                    'nom' => ['required', 'string','min:5', 'max:255'],
                    'prenom' => ['required', 'string', 'max:255'],
                    'cne' => ['required', 'string', 'max:255', 'unique:etudiants','exists:cne_etudiant_smi'],
                    'cin' => ['required', 'string', 'max:255', 'unique:etudiants'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:etudiants'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'tel' => ['required', ] ];
                if($data['diplome']=='OUI')
                {
         
                    $requet['nomdiplome']= ['required', 'string','min:5', 'max:255'];
                    $requet['datediplome']= ['required'];


                }

               
            
                 session()->flash('status','inscription échoué tu n\'as pas un étudiant SMI !!!');
     
     
             


        return Validator::make($data, $requet);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Etudiant
     */
    protected function create(array $data)
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
              ];



              if($_POST['diplome']=='OUI')
                {
         
                    $donne['diplome']= $data['nomdiplome'];
                    $donne['date_diplome']= $data['datediplome'];


                }

                else  {  
                      $donne['diplome']= null;
                      $donne['date_diplome']= null;

                     } 

                
        
               


        return Etudiant::create($donne);
    }

    protected function guard()
    {
        return Auth::guard('web');
    }

  
}
