

<?php $__env->startSection('content'); ?>
<div style="min-height: 3em;"></div>


<div class="info  p-4" style="min-width: 100%; background: #F1F5E6;">
    <div class="container">
    <div class="row">
 
    <div class="col-">
     <I>Membres</I>
</div>


<div class="col-4" style="margin-left:40%;">
    
   
     <input type="text" class="form-control"   placeholder="chercher un membre "> 
    
</div>
<?php if(Auth::guard('web')->user()->cne=='D131906448'): ?>
<div class="col">
      <div class="col">  <a  class="btn btn-info" href="<?php echo e(route('etudiant.create')); ?>" >Ajouter l'Etudiant</a> </div>
</div>
<?php endif; ?> 


</div>
<hr>







<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="info  p-4" style="min-width: 100%; ">
        <div class="row">
 <a href="<?php echo e(route('etudiant.show',['etudiant'=>$a->id])); ?> ">   
        <div class="col-">
        <?php if($img=$a->img): ?>
        <img src="img/<?php echo e($img); ?>"   style="width: 5em; max-height: 5em;" class="rounded-circle" alt="">
        <?php else: ?>
        <img src="img/vide.png"   style="width: 5em; max-height: 5em;" class="rounded-circle" alt="">
        <?php endif; ?>
    </div>
</a> 

    <div class="col">
        <br>
        
       <a href="<?php echo e(route('etudiant.show',['etudiant'=>$a->id])); ?>"> <p> <b > <?php echo e($a->nom); ?> <?php echo e($a->prenom); ?></b>  </p></a>
       <p > <span class="fas fa-envelope-square"></span><i style="color: green">  <?php echo e($a->email); ?></i> </p>

    </div>
    <div class="w-100"></div>
    <br>
       <?php if(Auth::guard('web')->user()->cne=='D131906448'): ?>
      
        <div style="display: inline-flex; margin-left: 70%"  >
         <div>   
        <form method="POST" action="<?php echo e(route('etudiant.destroy',['etudiant'=>$a->id])); ?> "  >
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
                
        
      <button  class="btn btn-danger" type="submit" > Supprimer</button>
    </form>
</div>
      &nbsp;&nbsp;&nbsp;&nbsp

     
       <a  class="btn btn-primary" href="<?php echo e(route('etudiant.edit',['etudiant'=>$a->id])); ?>" > modifier</a> 
       
    
 

   </div>
       
       <?php endif; ?>
       
        
    
    
    </div>
    <hr>
    </div>
   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
    </div>


<?php $__env->stopSection(); ?>




















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/etudiant/index.blade.php ENDPATH**/ ?>