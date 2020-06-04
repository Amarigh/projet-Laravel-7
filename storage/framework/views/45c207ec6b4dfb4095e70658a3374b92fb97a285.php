<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card" >
    
  <div class="card-footer">
    <?php $__currentLoopData = $etudiant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $et): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($et->id==$a->etudiant_id): ?>
    <P class=" text-success"> <?php echo e($et->nom); ?> </P>
    <?php endif; ?>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <P  > <?php echo e($a->sujet); ?>

      <?php if(Auth::guard('web')->user()->cne=='D131906448'): ?>
      
      <a  style="margin-left: 70%;" class="btn btn-danger" href="<?php echo e(route('deconnexion')); ?>"
      onclick="event.preventDefault();
                    document.getElementById('dellet_descut').submit();">supprimer</a>
       <?php endif; ?>
    
    </P>

    <form id="dellet_descut" method="POST" action="" style="display: none;">
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
          
  </form>

  </div>


</div> 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="card" id="message">
<form action=" <?php echo e(url('/descution')); ?> " method="post" >
  
  
    <div class="card-footer" style="display: inline-flex;">
    <div style="min-width: 80%" >  <textarea  class="form-control" placeholder="votre message"  name="descute" ></textarea></div>
    &nbsp;&nbsp; &nbsp; 
     <div style="padding-top: 15px"> <button type="submit" class="btn btn-success"> <span class="fa fa-send"></span> </button>
      </div>

    </div>
 
  
</form>
</div>
<?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/descute.blade.php ENDPATH**/ ?>