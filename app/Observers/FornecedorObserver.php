<?php

namespace App\Observers;

use App\Mail\FornecedorMail;
use App\Models\Fornecedor;
use App\Notifications\NotificarNovoFornecedor;
use App\User;
use Illuminate\Support\Facades\Mail;
class FornecedorObserver
{
    /**
     * Handle the fornecedor "created" event.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return void
     */
    public function created(Fornecedor $fornecedor)
    {
        Mail::to($fornecedor->email)->send(new FornecedorMail($fornecedor));
        $fornecedor->notify(new NotificarNovoFornecedor($fornecedor));
    }

}
