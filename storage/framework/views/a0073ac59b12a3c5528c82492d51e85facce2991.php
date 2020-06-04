
<?php $__env->startSection('content'); ?>
    
<ul class="list-group">
    <div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
    
<div class="card " style="width:400px; margin-top: 3em; background: #F1F5E6;">
    <div class="card-body ">

        <?php $__currentLoopData = $etudiant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($et->id==$a->etudiant_id): ?>
       
        <p class="card-text " >
            <?php if($et->img): ?>
            <img src="/img/<?php echo e($et->img); ?>" class="image rounded-circle" alt="">
            <?php else: ?>
            <img src="/img/vide.png" class="image rounded-circle" alt="">
            <?php endif; ?>
           
            
           <b class="text-uppercase" > <?php echo e(__($et->nom)); ?></b> Publier à  &nbsp;<i style="color: limegreen"> <?php echo e($a->created_at); ?></i></p>
        <?php endif; ?>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
    </div>    
     <?php if($a->img): ?>
     <img src="/img/<?php echo e($a->img); ?>" class="card-img-top rounded" style="max-height: 15em;" alt=""  >
     <?php endif; ?>
 
   
    
    <div class="card-body text-center">
        <h5 class="card-title text-center" style="color:red"><?php echo e($a->titre); ?></h5>
        <p class="card-text "><?php echo e($a->description); ?></p>
       <?php if($a->ville): ?>
       <text class="card-text text-center"> Ville : <?php echo e($a->ville); ?></text> 
       <?php endif; ?>
       <?php if($a->entreprise): ?>
       <text class="card-text text-center">entreprise : <?php echo e($a->entreprise); ?></text> 
       <?php else: ?> 
       <p class="card-text text-center">Formation enligne </p> 
       <?php endif; ?>
       <?php if($a->lien): ?>
       <p class="card-text">Voila le lien de formation <a href="<?php echo e($a->lien); ?>" >ici</a> </p> 
       <?php endif; ?>

       <?php if($a->durer): ?>
       <p class="card-text">Durer de formation est <span style="color: hotpink;"><?php echo e($a->durer); ?></span>  </p> 
       <?php endif; ?>
        
        <div style="display:inline-flex">
            
    
               
          
           <?php if(Auth::guard('web')->user()->cne=='D131906448'): ?>
           <form method="POST" action="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger" type="submit">supprimer</button>
        </form>
           <?php endif; ?>
         
         
        </div>
    </div>
  </div>
  <div class="col-xl-1 col-"></div>

  

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <li class="list-group-item d-flex justify-content-between align-items-center active">
    <p>rien pour le moment  </p>  
    <span class="badge badge-secondary badge-pill">pill1</span>
</li>
  <?php endif; ?>
    </div>

</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/experience/formation.blade.php ENDPATH**/ ?>