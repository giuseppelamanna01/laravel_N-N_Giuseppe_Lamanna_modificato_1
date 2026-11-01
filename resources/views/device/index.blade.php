<x-layout>
    <div class="container mt-5">
        <h1 class="text-light">I tuoi devices</h1>
        <div class="row mt-5">
            @forelse($devices as $device)
                <div class="col-12">
                    <x-card :device="$device"></x-card>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</x-layout>