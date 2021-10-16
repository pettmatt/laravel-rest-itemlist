

<?php $__env->startSection('header'); ?>

<h1>Edit item</h1>

<?php $__env->startSection('notification'); ?>

<?php if($errors->any()): ?>
  <div class="notification red">
    <h3>Error</h3>
    <div>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($error); ?></p>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>

    <?php if(isset($item)): ?>

    <form action="/items/<?php echo e($item->id); ?>" method="POST">
        <?php echo e(csrf_field()); ?>


        <div class="form">
            <label for="name">Name <span>of the item</span></label>
            <div class="container">
                <input type="text" name="name" id="name" value="<?php echo e($item->name); ?>">
            </div>

            <label for="diameter">Diameter <span>in meters</span></label>
            <div class="container">
                <input type="number" min='0' name="diameter" id="diameter" value="<?php echo e($item->diameter); ?>">
            </div>

            <label for="description">Description <span>of what is its purpose</span></label>
            <div class="container">
                <textarea type="text" name="description" id="description"><?php echo e($item->description); ?></textarea>
            </div>
        </div>

        <div>
            <button type="submit">
                Update item
            </button>
        </div>
    </form>
        
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Koulu\git\Laravel\laravel-rest-api\resources\views/form/update.blade.php ENDPATH**/ ?>