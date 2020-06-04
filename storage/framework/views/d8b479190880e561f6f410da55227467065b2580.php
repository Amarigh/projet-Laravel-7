
<?php $__env->startSection('content'); ?>
   <br>
   <br> 
   <div  style="background: #F1F5E6;"> 
      <div class="container"> 
   <?php if($etudiant->id==Auth::guard('web')->id()): ?>
   <h4><i>Modification de vos <b>informations personnelle</b></i></h4>
   <?php else: ?>
   <h4><i>Modification d'étudiant <b><?php echo e($etudiant->nom." ".$etudiant->prenom); ?></b></i></h4>
   <?php endif; ?>

<br>
<form action="<?php echo e(route('etudiant.update',['etudiant'=>$etudiant->id])); ?> " method="POST">
   <?php echo csrf_field(); ?>
   <?php echo method_field('PUT'); ?>
   <?php echo $__env->make('etudiant.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <br>
   <?php if($etudiant->id==Auth::guard('web')->id()): ?>
   <button class="btn btn-block btn-primary" type="submit">modifier</button>
   <?php else: ?>
   <button class="btn btn-block btn-primary" type="submit">modifier l'étudiant</button>
   <?php endif; ?>
  
   



</form>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/etudiant/edit.blade.php ENDPATH**/ ?>