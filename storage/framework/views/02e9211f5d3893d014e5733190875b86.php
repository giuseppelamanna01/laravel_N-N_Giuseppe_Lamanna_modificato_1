<div class="card mb-3" style="width: 18rem;">
  <img src="<?php echo e(Storage::url($device->image)); ?>" class="card-img-top" alt="Immagine del dispositivo">
  <div class="card-body">
    <h5 class="card-title">Nome: <?php echo e($device->name); ?></h5>
    <p class="card-text">Categoria: <?php echo e($device->category); ?></p>
    <p class="card-text">Numero seriale: <?php echo e($device->serialNumber); ?></p>
    <p class="card-text">Immagine: <?php echo e($device->image); ?></p>
    <p>Aggiunto da: <?php echo e($device->user->name); ?></p>
    <div class="d-flex">
      <?php $__empty_1 = true; $__currentLoopData = $device->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <a href="<?php echo e(route('genre.show', compact('genre'))); ?>"><?php echo e($genre->name); ?></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <?php endif; ?>
    </div>
    <a href="<?php echo e(route('device.show', compact('device'))); ?>" class="btn btn-primary">More info...</a>
    <?php if(auth()->guard()->check()): ?>
      <?php if($device->user_id == Auth::id()): ?>
      <a href="<?php echo e(route('device.edit', compact('device'))); ?>" class="btn btn-primary">Edit device</a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div><?php /**PATH C:\Users\39340\laravel_N-N_Giuseppe_Lamanna\resources\views/components/card.blade.php ENDPATH**/ ?>