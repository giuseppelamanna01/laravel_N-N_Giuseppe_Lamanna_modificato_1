<div class="card mb-3" style="width: 18rem;">
  <img src="{{Storage::url($device->image)}}" class="card-img-top" alt="Immagine del dispositivo">
  <div class="card-body">
    <h5 class="card-title">Nome: {{$device->name}}</h5>
    <p class="card-text">Categoria: {{$device->category}}</p>
    <p class="card-text">Numero seriale: {{$device->serialNumber}}</p>
    <p class="card-text">Immagine: {{$device->image}}</p>
    <p>Aggiunto da: {{$device->user->name}}</p>
    <a href="{{route('device.show', compact('device'))}}" class="btn btn-primary">More info...</a>
    @auth
      @if($device->user_id == Auth::id())
      <a href="{{route('device.edit', compact('device'))}}" class="btn btn-primary">Edit device</a>
      @endif
    @endauth
  </div>
</div>