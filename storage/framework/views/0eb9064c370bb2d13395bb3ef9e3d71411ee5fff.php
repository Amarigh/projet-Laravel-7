


<?php $__env->startSection('script'); ?>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>



<?php if(!Auth::guard('web')->user()->diplome): ?>


<script >


$(document).ready(function () {

    $("#partagerexperience").hide();


});


</script>

<?php endif; ?>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    

<br>
<br>
	

    <div class="row">
     
              <?php if($etudiant->id==Auth::guard('web')->id()): ?>
              <div class=" col-4"> <h1 class="PageTitle">Votre profil</h1> </div>
              <?php else: ?>
    <div class=" col-4"> <h1 class="PageTitle"><?php echo e($etudiant->nom); ?> <?php echo e($etudiant->prenom); ?></h1> </div> 
              <?php endif; ?>
               
         <div class="col-4"></div>
              
              <div class="col">
                 
                <div class="figure">
                   <div style="width: 100%;">
                     <?php if($img=$etudiant->img): ?>
                   <img src="/img/<?php echo e($img); ?>"   style="width: 10em; max-height: 10em;position: relative; left: 8em;" class="rounded-circle" alt="">
                     <?php else: ?>
                     <img src="/img/vide.png"   style="width: 10em; max-height: 10em;position: relative; left: 8em;" class="rounded-circle" alt="">
                     <?php endif; ?>
                      
                 </div>
                 <br>
                 
                 <?php if($etudiant->id==Auth::guard('web')->id()): ?>
                 <div style="margin-left: 4%;" id="modifierprofil"><button class="btn btn-info" type="submit"> Modifier Le profil </button></div>
                 <form action=" <?php echo e(route('etudiant.image')); ?> " method="post" enctype="multipart/form-data" id="imgprofil">
                    <?php echo csrf_field(); ?>
                     <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choisir img...</label>
                           
                      </div>
                   
                      <div style="margin-top: 8px;"><button class="btn btn-primary" type="submit"> enregistrer </button></div>
                     </form>

                   <?php endif; ?>  
            </div>

        </div> 
              
              

               <div class="w-100"></div>
   </div>
   
  
     <?php if($etudiant->id==Auth::guard('web')->id() || Auth::guard('web')->user()->cne=='D131906448'): ?>
         
         
   
  
     <fieldset style="background-color: #d2eeee;">
        <legend><h3>Les informations Personnel : </h3></legend>
      
    
             <br>
             <div class="row">
                 <div class="col-1"></div>
                 <div class="col-3 "><b> Nom</b></div>	
                <div class="col"><i><?php echo e($etudiant->nom); ?> </i> </div> 
                      
          </div>
                
                  <hr>



                  <div class="row">
                    <div class="col-1"></div>
                     <div class="col-3 "><b>Prenom</b></div>	
                    <div class="col"><i><?php echo e($etudiant->prenom); ?> </i> </div> 
                          
              </div>
                    
                      <hr>



                      <div class="row">
                        <div class="col-1"></div>
                         <div class="col-3 "><b>CIN</b></div>	
                        <div class="col"><i><?php echo e($etudiant->cin); ?> </i> </div> 
                              
                  </div>
                        
                          <hr>

              
                          <div class="row">
                            <div class="col-1"></div>
                             <div class="col-3 "><b>CNE</b></div>	
                            <div class="col"><i><?php echo e($etudiant->cne); ?> </i> </div> 
                                  
                      </div>
                            
                              <hr>


                              <div class="row">
                                <div class="col-1"></div>
                                 <div class="col-3 "><b>Naissance</b></div>	
                                <div class="col"><i><?php echo e($etudiant->naissance); ?> </i> </div> 
                                      
                          </div>
                                
                                  <hr>     

                              <div class="row">
                                <div class="col-1"></div>
                                 <div class="col-3 "><b>Sex</b></div>	
                                <div class="col"><i><?php echo e($etudiant->sex); ?> </i> </div> 
                                      
                          </div>
                                
                                  <hr>

          <?php if($etudiant->diplome): ?>
              
          <div class="row">
            <div class="col-1"></div>
             <div class="col-3 "><b>Diplome</b></div>	
            <div class="col"><i><?php echo e($etudiant->diplome); ?> </i> </div> 
                  
      </div>
            
              <hr>
              <div class="row">
                <div class="col-1"></div>
                 <div class="col-3 "><b>date Diplome</b></div>	
                <div class="col"><i><?php echo e($etudiant->date_diplome); ?> </i> </div> 
                      
          </div>
                
                  <hr>
              
          <?php endif; ?>
        


          <div class="row">
            <div class="col-1"></div>
             <div class="col-3 "><b>Tel</b></div>	
            <div class="col"><i><?php echo e($etudiant->tel); ?> </i> </div> 
                  
      </div>
            
              <hr>
              <div class="row">
                <div class="col-1"></div>
                 <div class="col-3 "><b>Email</b></div>	
                <div class="col"><i><?php echo e($etudiant->email); ?> </i> </div> 
                      
          </div>
                
                  <hr> 


        <div class="row">

               <div class="col-md-10 col"></div>
               
               <div class="col"> 
                                  
                                 
                                  <a href="<?php echo e(route('etudiant.edit',['etudiant'=>$etudiant->id])); ?>" class="btn btn-info" id="modifierformation">Modifier</a>


                   </div>

      </div>
     </fieldset>
     <?php endif; ?>
<?php if($etudiant->id==Auth::guard('web')->id() ): ?>

<br>
<?php if(Auth::guard('web')->user()->diplome): ?>
<div class="alert alert-secondary text-center" role="alert" >
    <button style="width: 25%;"  id="diplome" type="button" class="btn btn-outline-info" >
         mise à jour votre Diplome
     </button>
</div> 
<?php else: ?>
   
<div class="alert alert-secondary text-center" role="alert" >
    <button style="width: 25%;"  id="diplome" type="button" class="btn btn-outline-info" >
         Ajouter votre Diplome
     </button>
</div>  
<?php endif; ?>
 
 

<div class="from-row row justify-content-center" id="nomdiplome">
    <div class="col-6 ">
    <form action=" <?php echo e(route('etudiant.diplome')); ?> "  method="post">
        <?php echo csrf_field(); ?>
     <div class="row">
         <div class="col-4">
        <label for="diplomee">Votre Diplome</label>
         </div>
         <div>
            <input type="text" class="form-control " id="diplomee" value="<?php echo e(old('nomdiplome')); ?>" name="nomdiplome" placeholder="Votre Diplome" required>
         </div>
       
    </div>
        <br>

        <div class="row">
            <div class="col-4">
           <label for="datediplomee">date de  Diplome</label>
            </div>
            <div>
               <input type="date" class="form-control " id="datediplomee" value="<?php echo e(old('nomdiplome')); ?>" name="datediplome" placeholder="date de  Diplome" required>
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
<?php endif; ?>  



<div class=" row justify-content-md-center " id="secteur_travail">
    <div class="col-6">
    <form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="<?php echo e(route('secteuretravail.store')); ?>" >
        <?php echo csrf_field(); ?>
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
            
        
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($a!='enligne'): ?>
            <option value="<?php echo e($a->nom); ?>"><?php echo e($a->nom); ?></option>
            <?php endif; ?>
        
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
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








      
    <div class=" row justify-content-md-center" id="affichestage"   >
        <div class="col-6">
    <form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="<?php echo e(route('stage.store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre de stage</label>
                <input type="text" class="form-control <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" placeholder="titre de stage" name="titre" value="<?php echo e(old('titre')); ?>" required>
                <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ville </label>
                <input type="text" class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe le stage" value="<?php echo e(old('ville')); ?>" required>
                <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="ent1">Entreprise</label> &nbsp;&nbsp
                <select name="selectentreprise" class="entreprise" id="ent1">
                    
                
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($a!='enligne'): ?>
            <option value="<?php echo e($a->nom); ?>"><?php echo e($a->nom); ?></option>
            <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <option value="autre">autre</option>
                </select>
            </div>
              
            <div class="form-group" id="entreprise">
                <label for="entreprise_">entreprise</label>
                <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
            </div>
                       
                
            
            <div class="form-group">
                <label for="01f">Description de stage</label>
                <textarea class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="01f" placeholder="Dscription de stage" name="description" rows="7" value="<?php echo e(old('description')); ?>" required></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="lien">Lien s'il existe </label>
                <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="<?php echo e(old('lien')); ?>">
            </div>
            <div class="form-group">
                <label for="durer">Durer de stage</label>
                <input type="text" class="form-control" name="durer" id="durer" placeholder="durer de stage " value="<?php echo e(old('durer')); ?>" required>
                <?php $__errorArgs = ['durer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

    










  
<div class="row justify-content-md-center "  id="afficheformation"  >
    <div class=" col-6 ">
    <form style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="<?php echo e(route('formation.store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre de formation</label>
                <input type="text" class="form-control <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" placeholder="titre de formation" name="titre" value="<?php echo e(old('titre')); ?>" required>
                <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">ville </label>
                <input type="text" class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe l'offre" value="<?php echo e(old('ville')); ?>" required>
                <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="ent1">Entreprise</label> &nbsp;&nbsp
                <select name="selectentreprise" class="entreprise" id="ent1">
                    
                
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($a!='enligne'): ?>
                <option value="<?php echo e($a->nom); ?>"><?php echo e($a->nom); ?></option>
                <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <option value="autre">autre</option>
                </select>
            </div>
              
            <div class="form-group" id="entreprise">
                <label for="entreprise_">entreprise</label>
                <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
            </div>
                       
                
            
            <div class="form-group">
                <label for="01f">Description de Formation</label>
                <textarea class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="<?php echo e(old('description')); ?>" required></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <label for="lien">Lien s'il existe </label>
                <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="<?php echo e(old('lien')); ?>">
            </div>
            <div class="form-group">
                <label for="durer">Durer de formation</label>
                <input type="text" class="form-control" name="durer" id="durer" placeholder="durer de formation " value="<?php echo e(old('durer')); ?>" required>
                <?php $__errorArgs = ['durer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
    






     
   

<div class=" row justify-content-md-center" id="afficheemploi"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="<?php echo e(route('emploi.store')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom d"emploi</label>
            <input type="text" class="form-control <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" placeholder="titre d'emploi" name="titre" value="<?php echo e(old('titre')); ?>" required>
            <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">ville </label>
            <input type="text" class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe l'offre" value="<?php echo e(old('ville')); ?>" required>
            <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="ent1">Entreprise</label> &nbsp;&nbsp
            <select name="selectentreprise" class="entreprise" id="ent1">
                
            
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($a!='enligne'): ?>
            <option value="<?php echo e($a->nom); ?>"><?php echo e($a->nom); ?></option>
            <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <option value="autre">autre</option>
            </select>
        </div>
          
        <div class="form-group" id="entreprise">
            <label for="entreprise_">entreprise</label>
            <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
        </div>
                   
            
        
        <div class="form-group">
            <label for="01f">Description d'emploi</label>
            <textarea class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="<?php echo e(old('description')); ?>" required></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="lien">Lien s'il existe </label>
            <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="<?php echo e(old('lien')); ?>">
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











<div class=" row justify-content-md-center" id="afficheecole"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="<?php echo e(route('ecole.store')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom d"école</label>
            <input type="text" class="form-control <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" placeholder="titre de l'école" name="titre" value="<?php echo e(old('titre')); ?>" required>
            <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">ville </label>
            <input type="text" class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="exampleFormControlInput1" name="ville" placeholder="La ville d'école" value="<?php echo e(old('ville')); ?>" required>
            <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="form-group">
            <label for="01f">Description de l'école</label>
            <textarea class="form-control <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="<?php echo e(old('description')); ?>" required></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="lien">Lien s'il existe </label>
            <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="<?php echo e(old('lien')); ?>">
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













  <br> <br>






<?php $__env->stopSection(); ?>







 



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/etudiant/profil.blade.php ENDPATH**/ ?>