<?php $__env->startSection('script'); ?>
    

 $("*#diplome").hide();
         

 $("#diplomeoui").click(function () {
    $("*#diplome").show();


   });

   $("#diplomenon").click(function () {
    $("*#diplome").hide();


   });


         

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      <!-- inscription etudiant diplomé -->
<br>

      <div class="container-fluid" >


        


        <div class="row justify-content-center">

            <div class="col-8">
                <h1 class="mb-0 bread text-center" style="color: white;">Inscriez vous</h1>
               <br>

                <?php $__errorArgs = ['cne'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                
                   <?php if($message == 'The selected cne is invalid.'): ?>
                   <h3 style="color:red;" class="text-center">
                    <?php echo e(session()->get('status')); ?>  
                   </h3>
                   <?php endif; ?> 
               
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                
                <form class="needs-validation" 
                    style=" margin-bottom: 5%;background-color:#a5aaaa;padding:10%; margin-top:10%;" method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                   
                    <div class="row">
                        <div class="col">
                            <label for="Nom">Nom</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nom" name="nom" placeholder="votre nom" value="<?php echo e(old('nom')); ?>" required autocomplete="nom" >
                            <?php $__errorArgs = ['nom'];
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
                        <div class="col">
                            <label for="Prenom">Prénom</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Prenom" name="prenom" placeholder="votre prénom" value="<?php echo e(old('prenom')); ?>" required autocomplete="prenom" >
                            <?php $__errorArgs = ['prenom'];
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

                    </div>


                    <div class="row">
                        <div class="col-6">
                            <label for="CNE">CNE</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['cne'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="CNE" name="cne" placeholder="Code National d'Etudiant"
                            value="<?php echo e(old('cne')); ?>" required autocomplete="cne" >
                                <?php $__errorArgs = ['cne'];
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
                        <div class="col-6">
                            <label for="CIN">CIN</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['cin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="CIN"
                                placeholder="N° de carte national d'identité" name="cin" value="<?php echo e(old('cin')); ?>" required autocomplete="cin" >
                                <?php $__errorArgs = ['cin'];
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

                    </div>


                    <hr>

                    <div class="row">
                       <div class="col-4"> <label for="dateNaissance">date de naissance</label></div>
                       <div class="col"> <input type="date" class="form-control " id="dateNaissance" value="<?php echo e(old('datenaissance')); ?>" name="datenaissance" required></div>
                       
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
                            <input class="form-check-input  <?php $__errorArgs = ['nomdiplome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['datediplome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="diplome" id="diplomeoui" value="OUI" >
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
                    <div class="col">   <input type="text" class="form-control <?php $__errorArgs = ['nomdiplome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="ddiplome" value="<?php echo e(old('nomdiplome')); ?>" name="nomdiplome" placeholder="Votre Diplome" >
                        <?php $__errorArgs = ['nomdiplome'];
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
                </div>
                   <hr>
                <div class="row" id="diplome">
                      
                    <div class="col-4 "><label for="datediplome">date de Diplome</label></div >
                    <div class="col">   <input type="date" class="form-control <?php $__errorArgs = ['datediplome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="datediplome" value="<?php echo e(old('datediplome')); ?>" name="datediplome" placeholder="date de Diplome" >
                        <?php $__errorArgs = ['datediplome'];
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
                </div>

                   
                    
                  <hr>


                    <div class="row">
                        <div class="col-4"><label for="Email">Adresse mail</label></div>
                        <div class="col"><input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  id="Email"  placeholder="votre adresse mail" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                        <?php $__errorArgs = ['email'];
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
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-4"><label for="Tel">Tel</label></div>
                       <div class="col"> <input type="text" class="form-control <?php $__errorArgs = ['tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Tel" name="tel" placeholder="N° de votre téléphonne" value="<?php echo e(old('tel')); ?>" required autocomplete="tel">
                        <?php $__errorArgs = ['tel'];
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
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-4"><label for="MotDePasse">Mot de passe</label></div>
                       <div class="col"> <input type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="MotDePasse"  name="password" required autocomplete="new-password"
                            placeholder="saisir le mot de passe">
                            <?php $__errorArgs = ['password'];
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








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/auth/register.blade.php ENDPATH**/ ?>