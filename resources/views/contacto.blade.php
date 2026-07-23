@extends('layout')

@section('content')
    <main>
        <section class="page page--contact">
            <div class="contact-layout">
                <div class="contact-info">
                    <h1 class="page__title">// Contactate conmigo</h1>

                    <p>Completá el formulario y comunicate conmigo!</p>

                    <div class="contact-links">
                        <button type="button" class="contact-copy" id="copiar-email"
                                data-u="dHN0YXViZXJkZXY=" data-d="b3V0bG9vay5jb20=">
                            <span class="contact-copy__label" aria-live="polite">// Copiar email</span>
                        </button>

                        <a href="https://wa.me/5493446631242" target="_blank" rel="noopener" class="contact-link">
                            // WhatsApp
                        </a>
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
    // Deshabilita el botón al enviar, evita doble submit
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        const boton = e.currentTarget.querySelector('button[type="submit"]');
        boton.disabled = true;
        boton.textContent = 'Enviando...';
    });

    // Copiar email ofuscado al portapapeles
    (function () {
        const boton = document.getElementById('copiar-email');
        if (!boton) return;

        const etiqueta = boton.querySelector('.contact-copy__label');
        const original = etiqueta.textContent;

        const armarEmail = () => atob(boton.dataset.u) + '@' + atob(boton.dataset.d);

        const avisar = (texto, ok) => {
            etiqueta.textContent = texto;
            boton.classList.toggle('is-ok', ok);
            setTimeout(() => {
                etiqueta.textContent = original;
                boton.classList.remove('is-ok');
            }, 2000);
        };

        const copiarFallback = (texto) => {
            const area = document.createElement('textarea');
            area.value = texto;
            area.setAttribute('readonly', '');
            area.style.cssText = 'position:absolute;left:-9999px';
            document.body.appendChild(area);
            area.select();
            let ok = false;
            try { ok = document.execCommand('copy'); } catch (e) { ok = false; }
            document.body.removeChild(area);
            return ok;
        };

        boton.addEventListener('click', async () => {
            const email = armarEmail();
            try {
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(email);
                    avisar('// ¡copiado!', true);
                } else if (copiarFallback(email)) {
                    avisar('// ¡copiado!', true);
                } else {
                    avisar('// ' + email, false);
                }
            } catch (e) {
                avisar('// ' + email, false);
            }
        });
    })();
</script>
@endpush