
<?php $__env->startSection('script'); ?>
$("#entreprise").hide();

$("select.entreprise").change(function () {
    var langage = $(this).children("option:selected").val();

   if (langage == 'autre') {

       $("#entreprise").show();


    }
   else $("#entreprise").hide();
});
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class=" row justify-content-md-center" id="affichestage"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="<?php echo e(route('stage.index')); ?>" enctype="multipart/form-data">
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

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/experience/ajoutstage.blade.php ENDPATH**/ ?>