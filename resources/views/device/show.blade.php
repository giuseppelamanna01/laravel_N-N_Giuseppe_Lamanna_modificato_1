<x-layout>
    <div class="container">
        <div class="row" class="mt-5">
            <div class="col-12 col-md-8 text-light">
                <h1>{{$device->name}}</h1>
                <h2>Categoria: {{$device->category}}</h2>
                <p>{{$device->serialNumber}}</p>
                <ul>
                    @forelse($device->genres as $genre)
                        <li>{{ $genre->name }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($device->image) }}" alt="Immagine del device: {{$device->name}}" class="img-fluid">
            </div>
            @auth
                @if($device->user_id == Auth::id())
                <div class="row">
                    <form action="{{route('device.delete', compact('device'))}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Elimina device</button>
                    </form>
                </div>
                @endif
            @endauth
        </div>
    </div>
</x-layout>