<x-layout>
    <div class="container mt-5">
        <div class="row mt-3">
            <h1 class="text-light">Inserisci nuova categoria</h1>
            <div class="col-12 col-md-8 mt-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('genre.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="genre" class="form-label text-light">Inserisci il genere di categoria:</label>
                        <input type="text" class="form-control" name="name" id="genre" aria-describedby="emailHelp" value="{{old('name')}}">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>