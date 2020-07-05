<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FornecedorMail extends Mailable
{
    use Queueable, SerializesModels;
    public $fornecedor;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('edmar_espinola@hotmail.com.br')
                    ->subject('Seja bem-vindo ao ' . config('app.name'))
                    ->view('mail.fornecedor')
                    ->with('data', $this->fornecedor);
    }
}
