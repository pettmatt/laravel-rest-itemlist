<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/form.css')); ?>">
  <title>Space for items</title>
</head>
<body>

  <?php echo $__env->yieldContent('header'); ?>

  <ul class="own-space">
    <li><a href="/">Frontpage</a></li>
    <li><a href="/items">List</a></li>
    <li><a href="/new">Add new item</a></li>
  </ul>

  <?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH F:\Koulu\portfolio\testing\laravel-rest-itemlist\resources\views/app.blade.php ENDPATH**/ ?>