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
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <div class="container">
        <h1 class="benvenuto text-light">Pagina di Benvenuto</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="mt-4 mb-3 text-warning">Ciao, benvenuto nel sito di Elettronica sviluppato con Laravel.</h2>
                <p class="text-warning fs-4">Qui potremo aiutarti nella riparazione delle apparecchiature elettroniche, che siano ad esempio:</p>
                <ul class="text-warning fs-5">
                    <li>Smartphone</li>
                    <li>Tablet</li>
                    <li>Notebooks</li>
                    <li>Auricolari</li>
                    <li>Radio</li>
                </ul>
                <p class="mt-3 text fs-5">E tanto altro ancora... Ti daremo tutta l'assistenza di cui hai bisogno</p>
            </div>
        </div>
        <?php if(session()->has('insertSuccess')): ?>
        <div class="alert alert-success">
            <?php echo e(session('insertSuccess')); ?>

        </div>
        <?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\Users\39340\laravel_crud_Giuseppe_Lamanna\resources\views/welcome.blade.php ENDPATH**/ ?>