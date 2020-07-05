@php
    // Força a exclusão dos atributos de classe
    // Esse código foi adicionado para evitar a quebra de templates
    // ao passar acidentalmente classes e styles nos componentes
    if (isset($attributes)) {
        $attributes = $attributes->except(['class']);
    }
@endphp

@include($componentViewPath)
