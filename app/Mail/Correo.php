<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Justificante';
    public $nombre_usuario;
    public $justificante;

    /**
     * Create a new message instance.
     *
     * @param string $nombre_usuario
     * @param mixed $justificante
     * @return void
     */
    public function __construct($nombre_usuario, $justificante)
    {
        $this->nombre_usuario = $nombre_usuario;
        $this->justificante = $justificante;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('correo');
    }
}
