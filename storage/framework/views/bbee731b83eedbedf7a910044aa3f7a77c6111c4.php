
<?php $__env->startSection('content'); ?>
<br>
<?php $__empty_1 = true; $__currentLoopData = $actualite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<br>

<div class="info  p-4" style="min-width: 100%; background: #F1F5E6;">
    <?php $__currentLoopData = $a->etudiant()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
       
       
            <?php if($et->img): ?>
            <img src="/img/<?php echo e($et->img); ?>" class="image rounded-circle" alt="">
            <?php else: ?>
            <img src="/img/vide.png" class="image rounded-circle" alt="">
            <?php endif; ?>
           
            
           <b class="text-uppercase" > <?php echo e(__($et->nom)." ".__($et->prenom)); ?></b> Publier à  &nbsp;<i style="color: limegreen"> <?php echo e($a->created_at); ?></i></p>
       
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    
  <h3 style="color: red; text-align: center"><?php echo e($a->titre); ?> </h3>
 <div>
<?php if($a->img): ?>
<img src="img/<?php echo e($a->img); ?>"   style="width: 15em; max-height: 8em;" class="rounded" alt="">
<?php endif; ?>
 
  
    
</div>
<div>

<p><?php echo e($a->discription); ?></p>

<?php if($a->lien): ?>
<a  class="btn btn-primary" href="<?php echo e($a->lien); ?>">Continuer pour postuler</a>
<?php endif; ?> 
</div>
<?php if(Auth::guard('web')->user()->cne=='D131906448'): ?>
<div style="margin-left: 90%">
    <button   class="btn btn-danger" style="margin-left: 50%" > <i class="fas fa-trash"></i></button>
</div>  
<?php endif; ?>


</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<li class="list-group-item d-flex justify-content-between align-items-center active">
    <p>Pas d'actualiter  </p>  
    <span class="badge badge-secondary badge-pill">pill1</span>
</li>
<?php endif; ?>




 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/acueil.blade.php ENDPATH**/ ?>