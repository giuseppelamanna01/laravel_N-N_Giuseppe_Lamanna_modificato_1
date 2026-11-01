<x-layout>
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
                        <label for="category" class="form-label text-light">Categoria:</label>
                        <input type="text" name="category" class="form-control" id="category">
                    </div>
                    <div class="mb-3">
                        <label for="serialNumber" class="form-label text-light">Serial Number:</label>
                        <input type="text" name="serialNumber" class="form-control" id="serialNumber">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label text-light">Immagine:</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>