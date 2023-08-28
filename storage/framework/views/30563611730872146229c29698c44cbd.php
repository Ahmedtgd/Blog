<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Add Article')); ?></div>

                <div class="card-body">
                <form action="<?php echo e(route('articles.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="title"><?php echo e(__('Title')); ?>:</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="body"><?php echo e(__('Body')); ?>:</label>
                            <textarea rows="4" name="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="image">Image:</label>
                       <input type="file" name="image" accept="image/*">
                       </div>
                        <br>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Add New')); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k/Documents/blog/blog/resources/views/article/create.blade.php ENDPATH**/ ?>