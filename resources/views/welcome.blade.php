<x-layout>
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
    @endif

    <div class="container">
        <h1 class="benvenuto text-light">Pagina di Benvenuto</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="mt-4 mb-3 text-warning">Ciao, benvenuto nel sito di Elettronica sviluppato con Laravel.</h2>
                <p class="text-warning fs-4">Qui potremo aiutarti nella riparazione delle apparecchiature elettroniche, che siano ad esempio:</p>
                <ul class="text-warning fs-5">
                    <li>Smartphone</li>
                    <li>Tablet</li>
                    <li>Notebooks</li>
                    <li>Auricolari</li>
                    <li>Radio</li>
                </ul>
                <p class="mt-3 text fs-5">E tanto altro ancora... Ti daremo tutta l'assistenza di cui hai bisogno</p>
            </div>
        </div>
        @if(session()->has('insertSuccess'))
        <div class="alert alert-success">
            {{session('insertSuccess')}}
        </div>
        @endif
    </div>

</x-layout>