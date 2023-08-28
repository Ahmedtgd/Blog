<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-8">
    <table class="table table-striped bg-white shadow-lg rounded-lg">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="py-3">Title</th>
                <th class="py-3">Image</th>
            </tr>
            
                
            
        <tbody>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="py-4">
                    <a href="<?php echo e(route('articles.show', $art->id)); ?>" class="text-blue-500 hover:underline"><?php echo e($art->title); ?></a>
                </td>
                <td class="py-4 ">
                <div class="   user-image"> 
                  <img src="<?php echo e(asset('storage/' . $art->image_url)); ?>" alt="Article Image" width="150" style="border-radius: 10px;"  data-lightbox="myImg">
                </div>
            </td >
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
   
    <?php echo $articles->withQueryString()->links('pagination::bootstrap-5'); ?>

   

    <a href="<?php echo e(route('articles.create')); ?>" class="block mt-4 text-blue-500 hover:underline">Add new article</a>
</div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k/Documents/blog/blog/resources/views/article/index.blade.php ENDPATH**/ ?>