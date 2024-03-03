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
    public $alumno;

    /**
     * Create a new message instance.
     *
     * @param mixed $justificante
     * @return void
     */
    public function __construct($justificante, $alumno)
    {        
        $this->justificante = $justificante;
        $this->alumno = $alumno;

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
