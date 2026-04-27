<div class="project-card">
    <h3>// {{ $title }}</h3>
    <p>{{ $description }}</p>
    <div class="card-tags">
        @foreach($tags as $tag)
            <span>{{ $tag }}</span>
        @endforeach
    </div>
    <a href="{{ $link }}">Ver proyecto</a>
</div>