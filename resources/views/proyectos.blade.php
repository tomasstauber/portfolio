@extends('layout')

@section('content')
    <main>
        <section class="page page--projects">
            <header class="page__header">
                <h1 class="page__title">// proyectos</h1>
            </header>

            <div class="page__content">
                <div class="projects-grid">
                    <x-project-card
                        title="Portfolio"
                        description="Portfolio personal desarrollado con Laravel y SCSS para presentar proyectos y experiencia."
                        :tags="['PHP', 'Laravel', 'SCSS']"
                        link="#"
                    />

                    <x-project-card
                        title="NutriTrack (en desarrollo)"
                        description="Sistema de gestión sanitaria para ganado, enfocado en el registro de eventos sanitarios y trazabilidad por animal."
                        :tags="['.NET MAUI', 'C#', 'SQLite']"
                        link="#"
                    />
                </div>
            </div>
        </section>
    </main>
@endsection