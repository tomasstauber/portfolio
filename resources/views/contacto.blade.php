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

                <form class="contact-form" action="">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" placeholder="Tu nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="Apellido">Apellido</label>
                        <input type="text" name="Apellido" id="Apellido" placeholder="Tu apellido" required>
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" placeholder="Tu email" required>
                    </div>

                    <div class="form-group">
                        <label for="Mensaje">Mensaje</label>
                        <textarea name="Mensaje" id="Mensaje" placeholder="Tu mensaje" rows="4" required></textarea>
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