
 <div class="form-row ">
    <div class="col-6">Vous avez Travaillé à ce Diplome??</div>
  
    
    <div class="col-2">
        <input class="form-check-input <?php $__errorArgs = ['secteuretravail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="radio" name="secteure" id="secteureoui"  value="OUI" >
        <label class="form-check-label" for="secteureoui">OUI</label>
    </div>
    <div class="col-2">
        <input class="form-check-input " type="radio" name="secteure" id="secteureno" value="NON" checked>
        <label class="form-check-label" for="secteureno">NON</label>
    </div>

</div>





</div>

<br>
<div class="from-row " id="secteur_travail">
    <div class="col-8 ">
        <label for="travail">Secteure de travaille</label>
        <input class="form-control <?php $__errorArgs = ['secteuretravail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="secteuretravail" value="<?php echo e(old('secteuretravail')); ?>" id="travail"
            placeholder="votre secteure de travaille">
            <?php $__errorArgs = ['secteuretravail'];
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
    <div class="w-100"></div>
    <br>
    <div class="col-8 ">
        <label for="ent">Entreprise</label> &nbsp;&nbsp;&nbsp;
        <select class="entreprise" name="entrepriseselect" >
            <option  value="bts" >BTS</option>
            <option value="helpweb" >Helpweb</option>
            <option  value="autre"  >autre</option>


        </select>
       
    </div>
    <div class="w-100"></div>

    <br>
   
    <div class="col-8 " id="entreprise">

        <label for="entreprise1">Entreprise</label>
        <input type="text" class="form-control" value="<?php echo e(old('nomentreprise')); ?>" id="entreprise1" name="nomentreprise"
            placeholder="nom d'entreprise ou établissent">
           
     
    </div><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/smi/acueil.blade.php ENDPATH**/ ?>