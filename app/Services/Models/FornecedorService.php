<?php

namespace App\Services\Models;

use App\Contracts\Models\FornecedorServiceInterface;
use App\Models\Fornecedor;
use App\Services\BaseModelService;
class FornecedorService extends BaseModelService implements FornecedorServiceInterface
{
    public function model()
    {
        return Fornecedor::class;
    }

}
