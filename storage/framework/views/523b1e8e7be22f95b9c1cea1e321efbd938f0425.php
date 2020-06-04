
<?php $__env->startSection('content'); ?>
    

<br>
<?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<br>

<div class="info  p-4" style="min-width: 100%;background: #F1F5E6;">
    <?php $__currentLoopData = $a->etudiant()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
       
       
            <?php if($et->img): ?>
            <img src="/img/<?php echo e($et->img); ?>" class="image rounded-circle" alt="">
            <?php else: ?>
            <img src="/img/vide.png" class="image rounded-circle" alt="">
            <?php endif; ?>
           
            
           <b class="text-uppercase" > <?php echo e(__($et->nom)." ".__($et->prenom)); ?></b> Publier à  &nbsp;<i style="color: limegreen"> <?php echo e($a->created_at); ?></i></p>
       
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    
  <h3 style="color: red; text-align: center"><?php echo e($a->titre); ?> </h3>
  <br>
 <div>
<?php if($a->img): ?>
<img src="img/<?php echo e($a->img); ?>"   style="width: 15em; max-height: 8em;" class="rounded" alt="">
<br>
<?php endif; ?>
  
</div>
<div>

<p><?php echo e($a->description); ?></p>
</div>
<br>



<?php if($a->ville): ?>
 <span class="badge badge-success badge-pill"><?php echo e($a->ville); ?></span>
 <?php endif; ?>
<br>
<br>
<?php if($a->lien): ?>
<a  class="btn btn-primary" href="<?php echo e($a->lien); ?>">Continuer pour postuler</a>
<?php endif; ?> 

<div style="display:inline-flex">
     
    <?php if(Auth::guard('web')->user()->cne=='D131906448'): ?>
 <form method="POST" action=" <?php echo e(route('stage.destroy',['stage'=>$a->id])); ?>">
     <?php echo csrf_field(); ?>
     <?php echo method_field('DELETE'); ?>
         <button class="btn btn-danger" type="submit">supprimer</button>
 </form>
    <?php endif; ?>
  
  
 </div>


<div class="col-xl-1 col-"></div>


</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<li class="list-group-item d-flex justify-content-between align-items-center active">
    <p>Pas d'écoles supérieures maintenant  </p>  
    <span class="badge badge-secondary badge-pill">pill1</span>
</li>
<?php endif; ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/experience/ecole.blade.php ENDPATH**/ ?>