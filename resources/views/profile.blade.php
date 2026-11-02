<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-light">Profilo di {{Auth::user()->name}}</h1>
            @forelse (Auth::user()->devices as $device)
            <div class="col-12 col-md-4">
                <x-card :device="$device" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-light mt-5">Nessun device inserito</h3>
                <a href="{{route('device.create')}}" class="btn btn-outline-danger">Inserisci il tuo device</a>
            </div>
            @endforelse
        </div>
    </div>
</x-layout>