@extends('layouts.app')

@section('script')
    

 $("*#diplome").hide();
         

 $("#diplomeoui").click(function () {
    $("*#diplome").show();


   });

   $("#diplomenon").click(function () {
    $("*#diplome").hide();


   });


         

@endsection

@section('content')
      <!-- inscription etudiant diplomé -->
<br>

      <div class="container-fluid" >


        


        <div class="row justify-content-center">

            <div class="col-8">
                <h1 class="mb-0 bread text-center" style="color: white;">Inscriez vous</h1>
               <br>

                @error('cne')
                
                   @if ($message == 'The selected cne is invalid.')
                   <h3 style="color:red;" class="text-center">
                    {{session()->get('status')}}  
                   </h3>
                   @endif 
               
            @enderror

                {{-- @if(session()->has('status'))

                <h3 style="color:green;">
                      {{session()->get('status')}}  
                </h3>
                @endif --}}
                <form class="needs-validation" 
                    style=" margin-bottom: 5%;background-color:#a5aaaa;padding:10%; margin-top:10%;" method="POST" action="{{route('register')}}">
                    @csrf
                   
                    <div class="row">
                        <div class="col">
                            <label for="Nom">Nom</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="Nom" name="nom" placeholder="votre nom" value="{{ old('nom') }}" required autocomplete="nom" >
                            @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="Prenom">Prénom</label>
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="Prenom" name="prenom" placeholder="votre prénom" value="{{ old('prenom') }}" required autocomplete="prenom" >
                            @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-6">
                            <label for="CNE">CNE</label>
                            <input type="text" class="form-control @error('cne') is-invalid @enderror" id="CNE" name="cne" placeholder="Code National d'Etudiant"
                            value="{{ old('cne') }}" required autocomplete="cne" >
                                @error('cne')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-6">
                            <label for="CIN">CIN</label>
                            <input type="text" class="form-control @error('cin') is-invalid @enderror" id="CIN"
                                placeholder="N° de carte national d'identité" name="cin" value="{{ old('cin') }}" required autocomplete="cin" >
                                @error('cin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>


                    <hr>

                    <div class="row">
                       <div class="col-4"> <label for="dateNaissance">date de naissance</label></div>
                       <div class="col"> <input type="date" class="form-control " id="dateNaissance" value="{{ old('datenaissance') }}" name="datenaissance" required></div>
                       
                    </div>

                   <hr>
                    <div class="form-row">
                        <div class="col-4">Sex:</div>

                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sex" id="Homme" value="Homme" checked>
                            <label class="form-check-label" for="inlineRadio1">Homme</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="sex" id="Femme" value="Femme">
                            <label class="form-check-label" for="Femme">Femme</label>
                        </div>

                    </div>


                   <hr>

                    <div class="form-row">
                        <div class="col-4">Diplomé:</div>

                        <div class="col-4">
                            <input class="form-check-input  @error('nomdiplome') is-invalid @enderror @error('datediplome') is-invalid @enderror" type="radio" name="diplome" id="diplomeoui" value="OUI" >
                            <label class="form-check-label" for="diplomeoui">OUI</label>
                        </div>
                        <div class="col-4">
                            <input class="form-check-input" type="radio" name="diplome" id="diplomenon" value="NON" checked>
                            <label class="form-check-label" for="diplomenon">NON</label>
                        </div>

                    </div>

                     <br>
                
                     <div class="row" id="diplome">
                      
                    <div class="col-4 "><label for="ddiplome">Votre Diplome</label></div >
                    <div class="col">   <input type="text" class="form-control @error('nomdiplome') is-invalid @enderror" id="ddiplome" value="{{ old('nomdiplome') }}" name="nomdiplome" placeholder="Votre Diplome" >
                        @error('nomdiplome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                   <hr>
                <div class="row" id="diplome">
                      
                    <div class="col-4 "><label for="datediplome">date de Diplome</label></div >
                    <div class="col">   <input type="date" class="form-control @error('datediplome') is-invalid @enderror" id="datediplome" value="{{ old('datediplome') }}" name="datediplome" placeholder="date de Diplome" >
                        @error('datediplome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                   
                    
                  <hr>


                    <div class="row">
                        <div class="col-4"><label for="Email">Adresse mail</label></div>
                        <div class="col"><input type="email" class="form-control @error('email') is-invalid @enderror"  id="Email"  placeholder="votre adresse mail" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-4"><label for="Tel">Tel</label></div>
                       <div class="col"> <input type="text" class="form-control @error('tel') is-invalid @enderror" id="Tel" name="tel" placeholder="N° de votre téléphonne" value="{{ old('tel') }}" required autocomplete="tel">
                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-4"><label for="MotDePasse">Mot de passe</label></div>
                       <div class="col"> <input type="password" class="form-control  @error('password') is-invalid @enderror" id="MotDePasse"  name="password" required autocomplete="new-password"
                            placeholder="saisir le mot de passe">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <hr>
                    <div class="row">
                       <div class="col-4"> <label for="ConfMotDePasse">Confirmer mot de passe</label></div>
                      <div class="col">  <input type="password" class="form-control" id="ConfMotDePasse" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirmer votre mot de passe">


                      </div>
                    </div>
                    <hr>

                    <button class="btn btn-dark col-4" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>








@endsection