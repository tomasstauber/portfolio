@extends('layout')

@section('content')
    <main>
        <section class="container">
            <div id="left-content">
                <div id="my-name">
                    <h1>Hola!</h1>
                    <p>>_Soy Tomas Stauber</p>
                </div>

                <div id="my-desc">
                    <h2>Desarrollador Backend</h2>
                </div>

                <div id="instructions">
                    <p>Me enfoco en construir soluciones claras y eficientes, transformando problemas reales en lógica bien estructurada y código mantenible.</p>
                </div>
            </div>

            <div id="info-console">
                <div class="terminal-header">
                    <div class="terminal-buttons">
                        <span class="btn-close"></span>
                        <span class="btn-minimize"></span>
                        <span class="btn-maximize"></span>
                    </div>

                    <span class="terminal-title">tomas-stauber@portfolio: ~</span>
                </div>

                <div class="terminal-body">
                    <p><span class="prompt">tomas-stauber@portfolio</span>:<span class="path">~</span>$ whoami</p>
                    <p class="output">Tomas Stauber</p>

                    <p><span class="prompt">tomas-stauber@portfolio</span>:<span class="path">~</span>$ role</p>
                    <p class="output">Backend Developer</p>

                    <p><span class="prompt">tomas-stauber@portfolio</span>:<span class="path">~</span>$ stack</p>
                    <p class="output">PHP · Laravel · Python · Git</p>

                    <p><span class="prompt">tomas-stauber@portfolio</span>:<span class="path">~</span>$ location</p>
                    <p class="output">Argentina</p>

                    <p><span class="prompt">tomas-stauber@portfolio</span>:<span class="path">~</span>$ status</p>
                    <p class="output">Disponible para proyectos_</p>
                </div>
            </div>
        </section>
    </main>
@endsection