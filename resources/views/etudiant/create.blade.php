@extends('layouts.app')
@section('content')
   <br>
   <br> 
   <div  style="background: #F1F5E6;"> 
      <div class="container">
   <h4><i>Ajouter un <b>etudiant</b></i></h4>
   

<br>
<form action="{{route('etudiant.store')}} " method="POST">
   @csrf
   
   <div class="row">
    <div class="col-2 ">Nom</div>	
   <div class="col"><input type="text" class="form-control" name="nom" placeholder="votre nom "   value="{{old('nom')}}" required> </div> 
            
</div>
      
    <hr>



 <div class="row">
       <div class="col-2 ">Prenom</div>	
          <div class="col"><input type="text" name="prenom"    class="form-control"  placeholder="votre prenom"  required></div> 
            
</div>
      
   
<hr>


 <div class="row">
       <div class="col-2 ">CIN</div>	
          <div class="col"><input type="text" name="cin"  class="form-control"  placeholder="votre cin"  required> </div> 
            
</div>
      
        
<hr>
     
 <div class="row">
       <div class="col-2 ">CNE</div>	
      <div class="col"><input type="text" name="cne"   class="form-control" placeholder="votre cne" required> </div> 
            
</div>
      
  
<hr>

        <div class="row">
            <div class="col-2 ">Date de Naissance</div>	
           <div class="col"><input type="date" name="naissance"   class="form-control" placeholder="votre naissance" required> </div> 
                 
     </div>
           
         <hr>


<div class="row">
       <div class="col-2 ">SEX</div>	
        <div class="col"><input type="text" name="sex"   class="form-control"  placeholder="votre sex" required> </div> 
            
</div>
      
  <hr>


     
 <div class="row">
    <div class="col-2 ">Diplome</div>	
     <div class="col"> <input type="text" name="diplome"  class="form-control"   placeholder="votre diplome s'il y a sinon  laisse lui vide " ></div>  
         
</div>
   

     
<hr>



<div class="row">
       <div class="col-2 ">Tel</div>	
         <div class="col"><input type="text" name="tel"  class="form-control"  placeholder="votre tel" required> </div> 
            
</div>
      
        <hr>
<div class="row">
       <div class="col-2 ">Email</div>	
        <div class="col"> <input type="email" name="email"   class="form-control"  placeholder="votre email" required></div>  
            
</div>
      <hr>
 <div class="row">
    <div class="col-2 ">Mot de passe</div>	
     <div class="col"> <input type="password" name="password"  class="form-control"   placeholder="votre mot de passe" required ></div>  
         
</div>
   
    
   <br>
  
 
   <button class="btn btn-block btn-primary" type="submit">Ajouter l'étudiant</button>
 
  
   



</form>

</div>
   </div>
@endsection