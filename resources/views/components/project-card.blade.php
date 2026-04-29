<div class="project-card">
    <div class="project-card__content">
        <h3>// {{ $title }}</h3>

        <p>{{ $description }}</p>

        <div class="card-tags">
            @foreach($tags as $tag)
                <span>{{ $tag }}</span>
            @endforeach
        </div>
    </div>

    <div class="card-links">
        @if(!empty($link) && $link !== '#')
            <a href="{{ $link }}" target="_blank" rel="noopener noreferrer">
                Ver proyecto
            </a>
        @endif

        @if(!empty($repo) && $repo !== '#')
            <a href="{{ $repo }}" target="_blank" rel="noopener noreferrer">
                Repositorio
            </a>
        @endif
    </div>
</div>