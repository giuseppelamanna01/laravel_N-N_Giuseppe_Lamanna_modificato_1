<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid text-primary">
    <a class="navbar-brand logo" href="<?php echo e(route('home')); ?>">ElettronicaLaravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
        <a class="nav-link" href="<?php echo e(route('contact.us')); ?>">Contattaci</a>
        <a class="nav-link" href="<?php echo e(route('device.create')); ?>">Inserisci/Salva il tuo dispositivo</a>
        <a class="nav-link" href="<?php echo e(route('device.index')); ?>">Lista dei tuoi devices</a>
        <a class="nav-link" href="<?php echo e(route('genre.create')); ?>">Inserisci/Aggiungi una categoria</a>
        <a class="nav-link" href="<?php echo e(route('genre.index')); ?>">Tutte le categorie</a>
      </div>
      <ul>
        <li class="nav-item dropdown">
          <?php if(auth()->guard()->check()): ?> 
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, <?php echo e(Auth::user()->name); ?>

          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo e(route('user.profile')); ?>">Profilo personale</a>
            </li>
            <li>
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
              <form action="<?php echo e(route('logout')); ?>" method="POST" id="form-logout" class="d-none">
                <?php echo csrf_field(); ?>
              </form>
            </li>
          </ul>
          <?php else: ?>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, ospite!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('register')); ?>">Registrati</a></li>
            
          </ul>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH C:\Users\39340\laravel_N-N_Giuseppe_Lamanna\resources\views/components/navbar.blade.php ENDPATH**/ ?>