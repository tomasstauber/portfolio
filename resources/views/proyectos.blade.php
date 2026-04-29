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
                        description="Portfolio personal desarrollado con Laravel, Blade y SCSS para presentar proyectos, formación y experiencia."
                        :tags="['PHP', 'Laravel', 'Blade', 'SCSS']"
                        link="#"
                        repo="PONER_LINK_REPO_PORTFOLIO"
                    />

                    <x-project-card
                        title="Sistema Gym"
                        description="SPA para gestionar clases de gimnasio, con roles de administrador y socio, reservas, control de cupos y persistencia local para demo académica."
                        :tags="['React', 'Vite', 'Tailwind', 'LocalStorage']"
                        link="https://sistema-gym.netlify.app/#/login"
                        repo="https://github.com/tomasstauber/sistema_gym.git"
                    />

                    <x-project-card
                        title="NutriTrack (en desarrollo)"
                        description="Sistema de gestión sanitaria para ganado, enfocado en el registro de eventos sanitarios, trazabilidad por animal y organización de rodeos."
                        :tags="['.NET MAUI', 'C#', 'PostgreSQL', 'Diseño de sistemas']"
                        link="#"
                        repo="#"
                    />
                </div>
            </div>
        </section>
    </main>
@endsection