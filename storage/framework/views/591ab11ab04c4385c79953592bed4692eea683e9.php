
<?php $__env->startSection('content'); ?>
   <br>
   <br> 
   <div  style="background: #F1F5E6;"> 
      <div class="container">
   <h4><i>Ajouter un <b>etudiant</b></i></h4>
   

<br>
<form action="<?php echo e(route('etudiant.store')); ?> " method="POST">
   <?php echo csrf_field(); ?>
   
   <div class="row">
    <div class="col-2 ">Nom</div>	
   <div class="col"><input type="text" class="form-control" name="nom" placeholder="votre nom "   value="<?php echo e(old('nom')); ?>" required> </div> 
            
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/etudiant/create.blade.php ENDPATH**/ ?>