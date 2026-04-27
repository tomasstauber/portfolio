@extends('layout')

@section('content')
    <main>
        <div class="container" id="projects-container">
            <h2>// proyectos</h2>
            <div id="projects-grid">

                <x-project-card
                    title="Portfolio"
                    description="Portfolio personal con Laravel, SCSS y Blade."
                    :tags="['PHP', 'Laravel', 'SCSS']"
                    link="#"
                />

                <x-project-card
                    title="Proyecto 2"
                    description="Descripción breve."
                    :tags="['Python', 'Git']"
                    link="#"
                />

            </div>
        </div>
    </main>
@endsection