@extends('layouts.console')

@section('styles')
<link href="{!! asset('matrix/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<script src="{!! asset('matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js') !!}"></script>
<script src="{!! asset('matrix/assets/extra-libs/multicheck/jquery.multicheck.js') !!}"></script>
<script src="{!! asset('matrix/assets/extra-libs/DataTables/datatables.min.js') !!}"></script>
<script>
    $('#zero_config').DataTable();
</script>
@endsection
