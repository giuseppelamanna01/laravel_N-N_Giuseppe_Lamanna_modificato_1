<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container mt-5">
        <div class="row mt-4">
            <div class="col-12 col-md-8">
                <h1 class="text-light mb-5">Inserisci il tuo dispositivo</h1>
                <form action="<?php echo e(route('device.submit')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Inserisci il nome:</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label text-light">Categoria:</label>
                        <input type="text" name="category" class="form-control" id="category">
                    </div>
                    <div class="mb-3">
                        <label for="serialNumber" class="form-label text-light">Serial Number:</label>
                        <input type="text" name="serialNumber" class="form-control" id="serialNumber">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light">Immagine:</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\39340\laravel_crud_Giuseppe_Lamanna\resources\views/device/create.blade.php ENDPATH**/ ?>