<?php 

namespace App\Contracts;

interface TemFornecedorInterface
{
    /**
     * Tem um relacionamento belongTo com Usuario
     */
    public function fornecedor();

}