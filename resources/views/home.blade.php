    <x-layout>

    @if(session()->has('emailSent'))
    <div class="alert alert-success">
        {{ session('emailSent') }}
    </div>
    @endif
    @if(session()->has('emailError'))
    <div class="alert alert-danger">
        {{ session('emailError') }}
    </div>
    @endif


    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">

            <h1 class="display-5 fw-bold">
                DEVolution 🚀
            </h1>

            <p class="col-md-8 fs-5">
                Racconto il mio percorso nel mondo dello sviluppo:
                errori, scoperte, codice e crescita continua.
            </p>

            <a href="{{ route('articles.index') }}"
               class="btn btn-primary btn-lg">
                Entra nel blog
            </a>

        </div>
    </div>

</x-layout>
