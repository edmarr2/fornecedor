@if(isset($show) && $show)
    <x-link href="{{$show}}" type="success" data-action="show" size="sm" title="visualizar">
        <x-icon>person_search</x-icon>
    </x-link>
@endif

@if(isset($edit) && $edit)
    <x-link href="{{$edit}}" size="sm" data-action="edit" title="editar">
        <x-icon>edit</x-icon>
    </x-link>
@endif

@if(isset($destroy) && $destroy)
    <x-form :action="$destroy" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger btn-sm" type="submit"><x-icon>close</x-icon></button>
    </x-form>
@endif
