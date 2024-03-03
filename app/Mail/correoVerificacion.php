<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class correoVerificacion extends Mailable
{
    use Queueable, SerializesModels;
    public $codigoVerificacion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($codigoVerificacion)
    {
        $this->codigoVerificacion = $codigoVerificacion;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correoVerificacion')
                    ->subject('Correo Verificacion');
    }
}
