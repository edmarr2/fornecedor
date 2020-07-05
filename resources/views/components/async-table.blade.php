<form data-type="filtro-async-table" data-key="{{ $chave }}" disabled>
    <input hidden name="page" value="1">

    @if(isset($filtro))
        {!! $filtro !!}
    @else
        <x-row>
            <x-col size="lg-3,md-4,sm-6" offset="lg-9,md-8,sm-6">
                <x-input placeholder="Pesquisar" type="search" name="q"></x-input>
            </x-col>
        </x-row>
    @endif
</form>

<div style="margin-top:10px"></div>

<x-table data-type="async-table" :data-url="$url" :data-key="$chave"  :id="$id">
</x-table>

<div data-type="pagination-async-table" data-key="{{ $chave }}">
</div>
