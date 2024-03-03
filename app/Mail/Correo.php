<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Correo extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Justificante';
    public $justificante;

    /**
     * Create a new message instance.
     *
     * @param mixed $justificante
     * @return void
     */
    public function __construct($justificante)
    {        
        $this->justificante = $justificante;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Aquí debes cambiar 'correo' por el nombre de tu vista correspondiente
        return $this->view('correo');
    }
}
