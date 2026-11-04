<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-light mt-5">Tipologia genere del dispositivo</h1>
            <p class="text-light mt-4">{{$genre->name}}</p>
        </div>
        <div class="row">
            @forelse($genre->devices as $device)
            <div class="col-12 col-md-4">
                <x-card :device="$device" />
            </div>
            @empty
            <div class="col-12">
                <h3>Nessun device relativo alla categoria selezionata</h3>
                <a href="{{route('device.create')}}" class="bg-warning">Creane una</a>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>