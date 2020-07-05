<?php

namespace App\Contracts;

interface ScopeFiltrarParaAutocompleteInterface
{
    /**
     * Método para filtrar resultados para um recurso de autocomplete
     */
    public function scopeFiltrarParaAutocomplete($query, $q);
}
