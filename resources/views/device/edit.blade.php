<x-layout>
    <div class="container mt-5">
        <div class="row mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12 col-md-8">
                <h1 class="text-light mb-5">Modifica il tuo dispositivo</h1>
                <form action="{{route('device.update', $device)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Inserisci il nome:</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{$device->name}}">
                       
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label text-light">Categoria:</label>
                        <input type="text" name="category" class="form-control" id="category" value="{{$device->category}}">
                    </div>
                    <div class="mb-3">
                        <label for="serialNumber" class="form-label text-light">Serial Number:</label>
                        <input type="text" name="serialNumber" class="form-control" id="serialNumber" value="{{$device->serialNumber}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light">Immagine:</label>
                        <input type="file" name="image" class="form-control" id="image" value="{{$device->image}}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>