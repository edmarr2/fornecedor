@if($tableService instanceof Yajra\DataTables\Services\DataTable)
    @php
        $table = $tableService->html();
    @endphp

    {!! $table->table(['class' => 'material-datatables table datatable table-condensed table-bordered']) !!}
    @push('js')
        {{ $table->scripts() }}
    @endpush

@endif
