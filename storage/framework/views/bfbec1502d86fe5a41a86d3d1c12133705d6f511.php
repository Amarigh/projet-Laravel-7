
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">

    <div class="login col-6">
        <form style="background-color:#d2eeee;padding: 10%; margin-top:5%;" method="post" action="<?php echo e(route('actualite.store')); ?> " enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleFormControlInput1">Sujet d'actualité</label>
                <input type="text" class="form-control" name="titre" id="exampleFormControlInput1" placeholder="sujet d'actualité" required>
            </div>
          
    
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Description D'actualité</label>
                <textarea class="form-control" name="discription" id="exampleFormControlTextarea2" placeholder="Description D'actualité" rows="7" required></textarea>
            </div>
            <div class="form-group">
                <label for="lien">Lien s'il existe </label>
                <input type="text" class="form-control" name="lien" id="lien"  placeholder="lien s'il existe" value="<?php echo e(old('lien')); ?>">
            </div>
            <div class="form-group">
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choisir img...</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">partager</button>
            </div>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\S6\pfenew\app\smi_fsa\resources\views/experience/actualite.blade.php ENDPATH**/ ?>