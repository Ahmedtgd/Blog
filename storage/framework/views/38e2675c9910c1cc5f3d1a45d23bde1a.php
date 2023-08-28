<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="form-group">
    <label for="usr">Title:</label>
    <?php echo e($article->title); ?>

  </div>

  <div class="form-group">
    <label for="usr">Body:</label>
    <?php echo e($article->body); ?>

  </div>
 
  <div class="form-group">
    <table class="table table-striped">
      <tr>
      <div class="form-group">
    <img src="<?php echo e(asset('storage/' . $article->image_url)); ?>" alt="Article Image" width="600" style="border-radius: 10px;"  data-lightbox="myImg">
    </div>
    </tr>
      <tr style="border-radius: 10px;" >
        <td>Comments</td>
      </tr>
      </br></br>
    </table>

    <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($c->user): ?>
        <div class="comment">
            <strong><?php echo e($c->user->name); ?>:</strong>
            <?php echo e($c->comment); ?>

        </div>
    <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <form action="<?php echo e(route('articles.comments.store', ['article' => $article->id])); ?>" method="POST">
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label for="usr">Comments:</label>
        <textarea rows="4" cols="50" name="body" class="form-control"></textarea>
      </div>
      <br>
      <input type="submit" value="Add Comment" class="btn btn-primary">
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k/Documents/blog/blog/resources/views/article/edit.blade.php ENDPATH**/ ?>