@extends('layout')

@section('content')
    <main>
        <section class="page page--contact">
            <div class="contact-layout">
                <div class="contact-info">
                    <h1 class="page__title">// Contactate conmigo</h1>

                    <p>Completá el formulario y comunicate conmigo!</p>

                    <div class="contact-links">
                        <a href="mailto:tstauberdev@outlook.com">tstauberdev@outlook.com</a>
                        <a href="tel:+5493446631242">+54 9 3446631242</a>
                    </div>
                </div>

                <form class="contact-form" id="contact-form" method="POST" action="{{ route('contacto.enviar') }}">
                    @csrf

                    @if (session('exito'))
                        <p class="form-alert form-alert--ok">{{ session('exito') }}</p>
                    @endif

                    @if (session('error'))
                        <p class="form-alert form-alert--error">{{ session('error') }}</p>
                    @endif

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre"
                               value="{{ old('nombre') }}" maxlength="80" required>
                        @error('nombre') <span class="form-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" id="apellido" placeholder="Tu apellido"
                               value="{{ old('apellido') }}" maxlength="80" required>
                        @error('apellido') <span class="form-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Tu email"
                               value="{{ old('email') }}" maxlength="150" required>
                        @error('email') <span class="form-error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Tu mensaje" rows="4"
                                  maxlength="2000" required>{{ old('mensaje') }}</textarea>
                        @error('mensaje') <span class="form-error">{{ $message }}</span> @enderror
                    </div>

                    {{-- Honeypot anti-spam: oculto por CSS, invisible para personas --}}
                    <div class="form-honeypot" aria-hidden="true">
                        <label for="sitio_web">No completar este campo</label>
                        <input type="text" name="sitio_web" id="sitio_web" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-actions">
                        <button type="submit">Enviar</button>
                        <button type="reset">Limpiar</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
<script>
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        const boton = e.currentTarget.querySelector('button[type="submit"]');
        boton.disabled = true;
        boton.textContent = 'Enviando...';
    });
</script>
@endpush