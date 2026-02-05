<x-layout :title="$article['title']">

    <article class="mx-auto" style="max-width: 750px;">

        <a href="{{ route('articles.index') }}"
           class="btn btn-outline-secondary mb-4">
            ← Torna agli articoli
        </a>

       
        <div class="mb-4">

            <img 
                src="{{ $article['image'] }}"
                alt="{{ $article['title'] }}"
                class="img-fluid rounded-4 shadow-sm w-100"
                style="max-height: 420px; object-fit: cover;"
            >

        </div>

        <h1 class="fw-bold mb-3">
            {{ $article['title'] }}
        </h1>

        <p class="lead text-muted mb-4">
            {{ $article['excerpt'] }}
        </p>

        <div class="article-content">

            @foreach (explode("\n\n", $article['content']) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach

        </div>

    </article>

</x-layout>
