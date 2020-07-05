<?php

/**
 * Retorna o caminho de um recurso do template da aplicação
 *
 * @param  mixed $view
 * @return string
 */
if (! function_exists('template_path')) {
    function template_path($view = null)
    {
        if (is_array($view)) {
            $view = implode('.', $view);
        }

        return implode('.', [
            'templates',
            config('app.template'),
            $view
        ]);
    }
}
