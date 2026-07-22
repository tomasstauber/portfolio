<?php

namespace App\Http\Controllers;

use App\Mail\MensajeDeContacto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviar(Request $request): RedirectResponse
    {
        // Honeypot: campo invisible para personas. Si viene completo es un bot.
        // Devolvemos éxito falso para que no sepa que lo detectamos.
        if ($request->filled('sitio_web')) {
            return redirect()->route('contacto')->with('exito', 'Mensaje enviado.');
        }

        $datos = $request->validate([
            'nombre'   => ['required', 'string', 'max:80'],
            'apellido' => ['required', 'string', 'max:80'],
            'email'    => ['required', 'email', 'max:150'],
            'mensaje'  => ['required', 'string', 'min:10', 'max:2000'],
        ], [
            'nombre.required'   => 'Necesito tu nombre.',
            'apellido.required' => 'Necesito tu apellido.',
            'email.required'    => 'Necesito tu email para poder responderte.',
            'email.email'       => 'Ese email no parece válido.',
            'mensaje.required'  => 'Escribime algo.',
            'mensaje.min'       => 'Contame un poco más.',
        ]);

        try {
            Mail::to(config('mail.contact_to'))->send(new MensajeDeContacto(
                nombre:   $datos['nombre'],
                apellido: $datos['apellido'],
                email:    $datos['email'],
                mensaje:  $datos['mensaje'],
            ));
        } catch (\Throwable $e) {
            Log::error('Falló el envío del formulario de contacto', [
                'error' => $e->getMessage(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'No se pudo enviar el mensaje. Escribime directo a ' . config('mail.contact_to'));
        }

        return redirect()->route('contacto')->with('exito', '¡Gracias! Te respondo a la brevedad.');
    }
}