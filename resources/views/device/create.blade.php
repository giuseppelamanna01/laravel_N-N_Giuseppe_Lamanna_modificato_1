<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-5">
        <div class="row mt-4">
            <div class="col-12 col-md-8">
                <h1 class="text-light mb-5">Inserisci il tuo dispositivo</h1>
                <form action="{{route('device.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Inserisci il nome:</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="mb-3">
                        <label for="serialNumber" class="form-label text-light">Serial Number:</label>
                        <input type="text" name="serialNumber" class="form-control" id="serialNumber">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light">Immagine:</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light">Generi:</label>
                        @foreach($genres as $genre)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="genres[]" value="{{ $genre->id }}" id="genreCheck-{{ $genre->id }}">
                                <label class="form-check-label text-light" for="genreCheck-{{ $genre->id }}">
                                    {{ $genre->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>