<?php

namespace Tests\Feature;

use App\Mail\MensajeDeContacto;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactoTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Sin esto, el throttle:5,1 hace fallar los tests a partir del sexto POST
        $this->withoutMiddleware(ThrottleRequests::class);
    }

    public function test_envia_el_mail_con_datos_validos(): void
    {
        Mail::fake();

        $respuesta = $this->post(route('contacto.enviar'), [
            'nombre'   => 'Ada',
            'apellido' => 'Lovelace',
            'email'    => 'ada@example.com',
            'mensaje'  => 'Vi tu portfolio y me gustaría charlar con vos.',
        ]);

        $respuesta->assertRedirect(route('contacto'));
        $respuesta->assertSessionHas('exito');

        Mail::assertSent(MensajeDeContacto::class);
    }

    public function test_rechaza_datos_invalidos(): void
    {
        Mail::fake();

        $respuesta = $this->post(route('contacto.enviar'), [
            'nombre'   => '',
            'apellido' => '',
            'email'    => 'no-es-un-email',
            'mensaje'  => 'corto',
        ]);

        $respuesta->assertSessionHasErrors(['nombre', 'apellido', 'email', 'mensaje']);

        Mail::assertNothingSent();
    }

    public function test_descarta_los_envios_del_honeypot(): void
    {
        Mail::fake();

        $this->post(route('contacto.enviar'), [
            'nombre'    => 'Bot',
            'apellido'  => 'Spam',
            'email'     => 'bot@example.com',
            'mensaje'   => 'Comprá seguidores baratos ahora mismo.',
            'sitio_web' => 'http://spam.example',
        ]);

        Mail::assertNothingSent();
    }
}