<?php

use App\Formation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::resource('/smi/','EtudiantConrtoller');
Auth::routes();






Route::group([
    'middleware' => 'auth',
], function () {
    
    Route::get('/home', 'HomeController@index')->name('home');
 
    Route::resource('/etudiant','EtudiantController');
    
    Route::post('/modifierimage','EtudiantController@modifier_image')->name('etudiant.image');
    Route::post('/enregistrediplome','EtudiantController@enregistre_diplome')->name('etudiant.diplome');
    
    
     
    
    Route::resource('/formation','FormationController');
    
    Route::resource('/stage','StageController');
    Route::resource('/ecole','EcoleController');
    Route::resource('/emploi','EmploiController');
      
    Route::post('/deconnexion','Deconnexion@store')->name('deconnexion');
    
     
    
    Route::resource('/descution','DescuteController'); 
    Route::resource('/secteuretravail','SecteurController'); 
    
    Route::resource('/actualite','ActualiteController');








});