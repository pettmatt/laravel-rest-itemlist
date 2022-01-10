

<?php $__env->startSection('header'); ?>

<h1>List</h1>

<?php if(session('notification')): ?>
  <div class="notification">
    <h3>Notification</h3>
    <p><?php echo e(session('notification')); ?></p>
  </div>
<?php endif; ?>

<?php if(session('removed')): ?>
  <div class="notification red">
    <h3>Notification</h3>
    <p><?php echo e(session('removed')); ?></p>
  </div>
<?php endif; ?>

<?php if(session('added')): ?>
  <div class="notification green">
    <h3>Notification</h3>
    <p><?php echo e(session('added')); ?></p>
  </div>
<?php endif; ?>

<?php if(session('update')): ?>
  <div class="notification blue">
    <h3>Notification</h3>
    <p><?php echo e(session('update')); ?></p>
  </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

  <?php if(count($items) > 1): ?>
    <div>
      <p>List of <?php echo e(count($items)); ?> random items</p>
    </div>
  <?php endif; ?>
  
  <?php if(count($items) > 0): ?>
    <ul class="list">

      <div class="grid list-header">
        <p>Name</p>
        <p>Diameter</p>
        <p>Description</p>
      </div>

      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <div class="item">
        <a href="/items/<?php echo e($item->id); ?>">
          <div class="grid">
            <p class="name"><?php echo e($item->name); ?></p>
            <p><?php echo e($item->diameter); ?>m</p>
            <p><?php echo e(substr($item->description, 0, 50) . '...'); ?></p>
          </div>
        </a>
        <a class="delete red" href="delete/<?php echo e($item->id); ?>">Delete</a>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

  <?php else: ?>
    <p>No items found. Please <a class="yellow" href="/new">add</a> items.</p>

  <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Koulu\portfolio\testing\laravel-rest-itemlist\resources\views/posts/list.blade.php ENDPATH**/ ?>