

<?php $__env->startSection('header'); ?>

<h1>Single</h1>

<?php $__env->startSection('content'); ?>

<ul>
  <li><a class="yellow" href="<?php echo e($_SERVER['REQUEST_URI']); ?>/update">Update</a></li>
  <li><a class="red" href="/delete/<?php echo e($item->id); ?>">Delete</a></li>
</ul>

<div>
  <h2><?php echo e($item->name); ?></h2>

  <div>
    <h4>Diameter</h4>
    <p><?php echo e($item->diameter); ?>m</p>
  </div>
  
  <div>
    <h4>Description</h4>
    <p><?php echo e($item->description); ?></p>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Koulu\portfolio\testing\laravel-rest-itemlist\resources\views/posts/single.blade.php ENDPATH**/ ?>