<?php

namespace App\Contracts;

use App\Models\Model;

interface TableServiceInterface
{
    /**
     * Response para chamadas ajax
     */
    public function responseAjax();

    /**
     * Set parametros
     * @return self
     */
    public function setParams(array $params = []);
}
