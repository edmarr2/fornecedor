<?php

namespace App\Contracts;

interface ScopeFiltrarParaTabelaInterface
{
    /**
     * Método para filtrar resultados para um recurso de table
     */
    public function scopeFiltrarParaTabela($query, $q);
}
