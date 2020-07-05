
<form id="{{ $id }}" data-type="async-form" class="{{ $class }}">
    <x-card id="form-content">
        @if(!isset($mostrarTitulo) || $mostrarTitulo)
            <h3 style="margin-top: 0px">
                <button type="button" class="close" data-action="cancelar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span id="titulo"></span>
            </h3>
            <hr>
        @endif

        <x-alert id="alert" type="danger">
            <span id="alert-content"></span>
        </x-alert>

        <div id="slot">
            {!! $slot !!}
        </div>

        @if(!isset($mostrarFooter) || $mostrarFooter)
            <x-slot name="footer">
                <x-row>
                    <x-col offset="sm-3,md-3,lg-2,xl-2">
                        <x-button :submit="true" type="primary">
                            <x-icon>save</x-icon> Salvar
                        </x-button>

                        <x-button type="danger" data-action="cancelar">
                            <x-icon>times</x-icon> Cancelar
                        </x-button>
                    </x-col>
                </x-row>
            </x-slot>
        @endif
    </x-card>
</form>
