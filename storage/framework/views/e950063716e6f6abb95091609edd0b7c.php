<div class="card mb-3" style="width: 18rem;">
  <img src="<?php echo e(Storage::url($device->image)); ?>" class="card-img-top" alt="Immagine del dispositivo">
  <div class="card-body">
    <h5 class="card-title">Nome: <?php echo e($device->name); ?></h5>
    <p class="card-text">Categoria: <?php echo e($device->category); ?></p>
    <p class="card-text">Numero seriale: <?php echo e($device->serialNumber); ?></p>
    <p class="card-text">Immagine: <?php echo e($device->image); ?></p>
    <a href="<?php echo e(route('device.show', compact('device'))); ?>" class="btn btn-primary">More info...</a>
    <a href="<?php echo e(route('device.edit', compact('device'))); ?>" class="btn btn-primary">Edit device</a>
  </div>
</div><?php /**PATH C:\Users\39340\laravel_crud_Giuseppe_Lamanna\resources\views/components/card.blade.php ENDPATH**/ ?>