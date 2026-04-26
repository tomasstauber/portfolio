@extends('layout')

@section('content')
    <main>
        <section class="container">
            <div class="container" id="contacto-data">
                <h1>Contactate conmigo</h1>
            </div>
            <div class="container" id="social-fields">
                <p><a href="">tstauberdev@outlook.com</a></p>
                <p><a href="https://github.com/tstauberalumno-proof">Github</a></p>
            </div>
        </section>
    
         <form action="">

            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Ingrese su nombre" required>
            <br>

            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido" id="Apellido" placeholder="Ingrese su apellido" required>
            <br>

            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" placeholder="Ingrese su email" required>
            <br>

            <label for="Telefono">Telefono</label>
            <input type="number" name="Telefono" id="Telefono" placeholder="Ingrese su telefono" required>
            <br>

            <label for="Edad">Edad</label>
            <input type="number" name="Edad" id="Edad" placeholder="Ingrese su edad" min="18" max="110"
                required>
            <br>

            <label for="Contrasena">Contraseña</label>
            <input type="password" name="Contrasena" id="Contrasena" placeholder="Ingrese su contraseña"
                min="12" max="30" required>
            <br>
            
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar formulario</button>
        </form>
    </main>
