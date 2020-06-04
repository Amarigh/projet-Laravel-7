

@extends('layouts.app')
@section('script')



@endsection
@section('style')



@if (!Auth::guard('web')->user()->diplome)


<script >


$(document).ready(function () {

    $("#partagerexperience").hide();


});


</script>

@endif
<script src="/js/profil.js"></script>
<style type="text/css">
    
    .infopersonel{
      position: relative;
      left:2em;
    }
    
    .PageTitle {
          text-align: center;
          color: black;
          padding: 1%;
          
          
          background-color:  #F1F5E6;
      <div class="container">;
        }
    
    .pinput{
      text-align: center;
      min-width: 30em;
padding: auto;
    }
    </style>

@endsection
@section('content')
    

<br>
<br>
	

    <div class="row">
     
              @if ($etudiant->id==Auth::guard('web')->id())
              <div class=" col-4"> <h1 class="PageTitle">Votre profil</h1> </div>
              @else
    <div class=" col-4"> <h1 class="PageTitle">{{ $etudiant->nom}} {{$etudiant->prenom}}</h1> </div> 
              @endif
               
         <div class="col-4"></div>
              
              <div class="col">
                 
                <div class="figure">
                   <div style="width: 100%;">
                     @if ($img=$etudiant->img)
                   <img src="/img/{{$img}}"   style="width: 10em; max-height: 10em;position: relative; left: 8em;" class="rounded-circle" alt="">
                     @else
                     <img src="/img/vide.png"   style="width: 10em; max-height: 10em;position: relative; left: 8em;" class="rounded-circle" alt="">
                     @endif
                      
                 </div>
                 <br>
                 {{-- hhhh --}}
                 @if ($etudiant->id==Auth::guard('web')->id())
                 <div style="margin-left: 4%;" id="modifierprofil"><button class="btn btn-info" type="submit"> Modifier Le profil </button></div>
                 <form action=" {{route('etudiant.image') }} " method="post" enctype="multipart/form-data" id="imgprofil">
                    @csrf
                     <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choisir img...</label>
                           
                      </div>
                   
                      <div style="margin-top: 8px;"><button class="btn btn-primary" type="submit"> enregistrer </button></div>
                     </form>

                   @endif  
            </div>

        </div> 
              
              

               <div class="w-100"></div>
   </div>
   
  
     @if ($etudiant->id==Auth::guard('web')->id() || Auth::guard('web')->user()->cne=='D131906448')
         
         
   
  
     <fieldset style="background-color: #d2eeee;">
        <legend><h3>Les informations Personnel : </h3></legend>
      
    
             <br>
             <div class="row">
                 <div class="col-1"></div>
                 <div class="col-3 "><b> Nom</b></div>	
                <div class="col"><i>{{$etudiant->nom }} </i> </div> 
                      
          </div>
                
                  <hr>



                  <div class="row">
                    <div class="col-1"></div>
                     <div class="col-3 "><b>Prenom</b></div>	
                    <div class="col"><i>{{$etudiant->prenom }} </i> </div> 
                          
              </div>
                    
                      <hr>



                      <div class="row">
                        <div class="col-1"></div>
                         <div class="col-3 "><b>CIN</b></div>	
                        <div class="col"><i>{{$etudiant->cin }} </i> </div> 
                              
                  </div>
                        
                          <hr>

              
                          <div class="row">
                            <div class="col-1"></div>
                             <div class="col-3 "><b>CNE</b></div>	
                            <div class="col"><i>{{$etudiant->cne }} </i> </div> 
                                  
                      </div>
                            
                              <hr>


                              <div class="row">
                                <div class="col-1"></div>
                                 <div class="col-3 "><b>Naissance</b></div>	
                                <div class="col"><i>{{$etudiant->naissance }} </i> </div> 
                                      
                          </div>
                                
                                  <hr>     

                              <div class="row">
                                <div class="col-1"></div>
                                 <div class="col-3 "><b>Sex</b></div>	
                                <div class="col"><i>{{$etudiant->sex }} </i> </div> 
                                      
                          </div>
                                
                                  <hr>

          @if ($etudiant->diplome)
              
          <div class="row">
            <div class="col-1"></div>
             <div class="col-3 "><b>Diplome</b></div>	
            <div class="col"><i>{{$etudiant->diplome }} </i> </div> 
                  
      </div>
            
              <hr>
              <div class="row">
                <div class="col-1"></div>
                 <div class="col-3 "><b>date Diplome</b></div>	
                <div class="col"><i>{{$etudiant->date_diplome }} </i> </div> 
                      
          </div>
                
                  <hr>
              
          @endif
        


          <div class="row">
            <div class="col-1"></div>
             <div class="col-3 "><b>Tel</b></div>	
            <div class="col"><i>{{$etudiant->tel }} </i> </div> 
                  
      </div>
            
              <hr>
              <div class="row">
                <div class="col-1"></div>
                 <div class="col-3 "><b>Email</b></div>	
                <div class="col"><i>{{$etudiant->email }} </i> </div> 
                      
          </div>
                
                  <hr> 


        <div class="row">

               <div class="col-md-10 col"></div>
               
               <div class="col"> 
                                  
                                 
                                  <a href="{{route('etudiant.edit',['etudiant'=>$etudiant->id])}}" class="btn btn-info" id="modifierformation">Modifier</a>


                   </div>

      </div>
     </fieldset>
     @endif
@if ($etudiant->id==Auth::guard('web')->id() )

<br>
@if (Auth::guard('web')->user()->diplome)
<div class="alert alert-secondary text-center" role="alert" >
    <button style="width: 25%;"  id="diplome" type="button" class="btn btn-outline-info" >
         mise à jour votre Diplome
     </button>
</div> 
@else
   
<div class="alert alert-secondary text-center" role="alert" >
    <button style="width: 25%;"  id="diplome" type="button" class="btn btn-outline-info" >
         Ajouter votre Diplome
     </button>
</div>  
@endif
 
 

<div class="from-row row justify-content-center" id="nomdiplome">
    <div class="col-6 ">
    <form action=" {{route('etudiant.diplome')}} "  method="post">
        @csrf
     <div class="row">
         <div class="col-4">
        <label for="diplomee">Votre Diplome</label>
         </div>
         <div>
            <input type="text" class="form-control " id="diplomee" value="{{ old('nomdiplome') }}" name="nomdiplome" placeholder="Votre Diplome" required>
         </div>
       
    </div>
        <br>

        <div class="row">
            <div class="col-4">
           <label for="datediplomee">date de  Diplome</label>
            </div>
            <div>
               <input type="date" class="form-control " id="datediplomee" value="{{ old('nomdiplome') }}" name="datediplome" placeholder="date de  Diplome" required>
            </div>
          
       </div>

        <br>
        <button class="btn btn-primary " type="submit" name="enregistredipolome">enregistrer</button>
    </form>
        <br>
        <br>
    </div >

</div>

<div id="partagerexperience">
 <h1>Partager  vos éxperiences </h1>

 <br>

 {{-- ------------- --}}



 <div class="alert alert-secondary text-center" role="alert" >
    <button style="width: 25%;"  id="secteur" type="button" class="btn btn-outline-info" >
          Ajouter Votre sécteur de Travail
     </button>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <button style="width: 25%;"  id="stage" type="button" class="btn btn-outline-info" >
        Ajouter un stage
 </button>
 &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
 <button style="width: 25%;"  id="formation" type="button" class="btn btn-outline-info" >
    Ajouter une Formation
</button>
<br>
<br>
<br>
<button style="width: 25%;"  id="emploi" type="button" class="btn btn-outline-info" >
    Ajouter une Offre D'emploi
</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button style="width: 25%;"  id="ecole" type="button" class="btn btn-outline-info" >
    Ajouter une Ecole suppérieur
</button>
</div>

</div>
@endif  
{{-- secteure de  trevai --}}


<div class=" row justify-content-md-center " id="secteur_travail">
    <div class="col-6">
    <form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('secteuretravail.store')}}" >
        @csrf
    <div class="col-8 from-row ">
        <label for="travail">Secteure de travaille</label>
        <input class="form-control" type="text" name="secteuretravail" id="travail"
            placeholder="votre secteure de travaille" required>


    </div>
    <div class="w-100"></div>
    <br>
    <div class="col-8 ">
        <label for="ent">Entreprise</label> &nbsp;&nbsp;&nbsp;
        <select name="selectentreprise" class="entreprise" id="ent1">
            {{-- @foreach ($data as $a) --}}
        {{-- <option value="{{$a->nom}}">{{$a->nom}}</option> --}}
        @foreach ($data as $a)
            @if ($a!='enligne')
            <option value="{{$a->nom}}">{{ $a->nom}}</option>
            @endif
        
         @endforeach
            {{-- @endforeach --}}
            <option value="autre">autre</option>
        </select>
    </div>
    <div class="w-100"></div>

    <br>
    <div class="col-8 from-row" id="entreprise">

        <label for="entreprise_">Entreprise</label>
        <input type="text" class="form-control" id="entreprise_"
            placeholder="nom d'entreprise ou établissent" name="entreprise">
            <br>
     

    </div>
    <div class="w-100"></div>
    <div class="col-8 from-row">
    <button type="submit" class="btn btn-primary" name="secteurtravail">enregistrer</button>
        
</div>

    </form>
    </div>
</div>


{{-- stage --}}





      
    <div class=" row justify-content-md-center" id="affichestage"   >
        <div class="col-6">
    <form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('stage.store')}}" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre de stage</label>
                <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre de stage" name="titre" value="{{ old('titre') }}" required>
                @error('titre') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ville </label>
                <input type="text" class="form-control @error('ville') is-invalid @enderror" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe le stage" value="{{ old('ville') }}" required>
                @error('ville') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group">
                <label for="ent1">Entreprise</label> &nbsp;&nbsp
                <select name="selectentreprise" class="entreprise" id="ent1">
                    {{-- @foreach ($data as $a) --}}
                {{-- <option value="{{$a->nom}}">{{$a->nom}}</option> --}}
                @foreach ($data as $a)
                @if ($a!='enligne')
            <option value="{{$a->nom}}">{{ $a->nom}}</option>
            @endif
                    @endforeach
                    {{-- @endforeach --}}
                    <option value="autre">autre</option>
                </select>
            </div>
              
            <div class="form-group" id="entreprise">
                <label for="entreprise_">entreprise</label>
                <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
            </div>
                       
                
            
            <div class="form-group">
                <label for="01f">Description de stage</label>
                <textarea class="form-control @error('ville') is-invalid @enderror" id="01f" placeholder="Dscription de stage" name="description" rows="7" value="{{ old('description') }}" required></textarea>
                @error('description') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="lien">Lien s'il existe </label>
                <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="{{ old('lien') }}">
            </div>
            <div class="form-group">
                <label for="durer">Durer de stage</label>
                <input type="text" class="form-control" name="durer" id="durer" placeholder="durer de stage " value="{{ old('durer') }}" required>
                @error('durer') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
               
                <div class="custom-file form-group">
                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" >
                    <label class="custom-file-label" for="validatedCustomFile">image s'il existe</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">enregistrer</button>
            </div>
        </form>
    </div>
    </div>

    



{{-- stage --}}
{{-- fin stage --}}



{{-- id="afficheformation"  --}}

  
<div class="row justify-content-md-center "  id="afficheformation"  >
    <div class=" col-6 ">
    <form style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('formation.store')}}" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre de formation</label>
                <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre de formation" name="titre" value="{{ old('titre') }}" required>
                @error('titre') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ville </label>
                <input type="text" class="form-control @error('ville') is-invalid @enderror" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe l'offre" value="{{ old('ville') }}" required>
                @error('ville') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group">
                <label for="ent1">Entreprise</label> &nbsp;&nbsp
                <select name="selectentreprise" class="entreprise" id="ent1">
                    {{-- @foreach ($data as $a) --}}
                {{-- <option value="{{$a->nom}}">{{$a->nom}}</option> --}}
                @foreach ($data as $a)
                @if ($a!='enligne')
                <option value="{{$a->nom}}">{{ $a->nom}}</option>
                @endif
                    @endforeach
                    {{-- @endforeach --}}
                    <option value="autre">autre</option>
                </select>
            </div>
              
            <div class="form-group" id="entreprise">
                <label for="entreprise_">entreprise</label>
                <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
            </div>
                       
                
            
            <div class="form-group">
                <label for="01f">Description de Formation</label>
                <textarea class="form-control @error('ville') is-invalid @enderror" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="{{ old('description') }}" required></textarea>
                @error('description') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="lien">Lien s'il existe </label>
                <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="{{ old('lien') }}">
            </div>
            <div class="form-group">
                <label for="durer">Durer de formation</label>
                <input type="text" class="form-control" name="durer" id="durer" placeholder="durer de formation " value="{{ old('durer') }}" required>
                @error('durer') 
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
               
                <div class="custom-file form-group">
                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" >
                    <label class="custom-file-label" for="validatedCustomFile">image s'il existe</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">enregistrer</button>
            </div>
        </form>
    </div>
</div>
    





{{-- emploi -------- --}}
     
   

<div class=" row justify-content-md-center" id="afficheemploi"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('emploi.store')}}" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom d"emploi</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre d'emploi" name="titre" value="{{ old('titre') }}" required>
            @error('titre') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">ville </label>
            <input type="text" class="form-control @error('ville') is-invalid @enderror" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe l'offre" value="{{ old('ville') }}" required>
            @error('ville') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="form-group">
            <label for="ent1">Entreprise</label> &nbsp;&nbsp
            <select name="selectentreprise" class="entreprise" id="ent1">
                {{-- @foreach ($data as $a) --}}
            {{-- <option value="{{$a->nom}}">{{$a->nom}}</option> --}}
            @foreach ($data as $a)
            @if ($a!='enligne')
            <option value="{{$a->nom}}">{{ $a->nom}}</option>
            @endif
                    @endforeach
                {{-- @endforeach --}}
                <option value="autre">autre</option>
            </select>
        </div>
          
        <div class="form-group" id="entreprise">
            <label for="entreprise_">entreprise</label>
            <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
        </div>
                   
            
        
        <div class="form-group">
            <label for="01f">Description d'emploi</label>
            <textarea class="form-control @error('ville') is-invalid @enderror" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="{{ old('description') }}" required></textarea>
            @error('description') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="lien">Lien s'il existe </label>
            <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="{{ old('lien') }}">
        </div>
        
        <div class="form-group">
           
            <div class="custom-file form-group">
                <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" >
                <label class="custom-file-label" for="validatedCustomFile">image s'il existe</label>
            </div>
        </div>
        
      <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">enregistrer</button>
        </div>
    </form>
</div>
</div>



{{-- fin emploi --}}



{{-- ajout ecole --}}



<div class=" row justify-content-md-center" id="afficheecole"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('ecole.store')}}" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom d"école</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre de l'école" name="titre" value="{{ old('titre') }}" required>
            @error('titre') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">ville </label>
            <input type="text" class="form-control @error('ville') is-invalid @enderror" id="exampleFormControlInput1" name="ville" placeholder="La ville d'école" value="{{ old('ville') }}" required>
            @error('ville') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        
        <div class="form-group">
            <label for="01f">Description de l'école</label>
            <textarea class="form-control @error('ville') is-invalid @enderror" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="{{ old('description') }}" required></textarea>
            @error('description') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="lien">Lien s'il existe </label>
            <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="{{ old('lien') }}">
        </div>
        
        
        
      <br>
      <div class="form-group">
           
        <div class="custom-file form-group">
            <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" >
            <label class="custom-file-label" for="validatedCustomFile">image s'il existe</label>
        </div>
    </div>
      <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">enregistrer</button>
        </div>
    </form>
</div>
</div>


{{-- fin ecol --}}










  <br> <br>






@endsection







 


