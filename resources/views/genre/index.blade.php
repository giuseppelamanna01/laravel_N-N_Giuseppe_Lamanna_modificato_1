<x-layout>
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-light">Esplora le categorie di genere</h1>
            @foreach($genres as $genre)
            <div class="col-12 col-md-4">
                <a href="{{route('genre.show', compact('genre'))}}">
                    <h3 class="text-light bg-warning">{{$genre->name}}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>