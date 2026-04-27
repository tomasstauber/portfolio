@extends('layout')

@section('content')
    <main>
        <div class="container">
            <div id="left-content">
                <div id="my-name">
                    <h1>Hola!</h1>
                    <p>>_Soy Tomas Stauber</p>
                </div>
                <div id="my-desc">
                    <h2>Desarrollador Backend</h2>
                </div>
                <div id="instructions">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum consequuntur ad corporis ipsam
                        itaque. Impedit doloribus nulla itaque cumque exercitationem, hic adipisci ad, iste nisi quas ipsum
                        in, neque architecto.</p>
                </div>
            </div>
            <div id="info-console">
                <p>$ whoami</p>
                <p>> Tomas Stauber</p>
                <p>$ role</p>
                <p>> Backend Developer</p>
                <p>$ stack</p>
                <p>> PHP · Laravel · Python · Git</p>
                <p>$ location</p>
                <p>> Argentina</p>
                <p>$ status</p>
                <p>> Disponible para proyectos_</p>
            </div>
        </div>
    </main>
@endsection
