<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid text-primary">
    <a class="navbar-brand logo" href="{{route('home')}}">ElettronicaLaravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('contact.us')}}">Contattaci</a>
        <a class="nav-link" href="{{route('device.create')}}">Inserisci/Salva il tuo dispositivo</a>
        <a class="nav-link" href="{{route('device.index')}}">Lista dei tuoi devices</a>
      </div>
      <ul>
        <li class="nav-item dropdown">
          @auth 
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a>
              <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, ospite!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            
          </ul>
          @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>