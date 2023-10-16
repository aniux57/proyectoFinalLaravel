@extends('layouts.console')

@section('styles')
    <link href="{!! asset('matrix/assets/libs/select2/dist/css/select2.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('matrix/assets/libs/jquery-minicolors/jquery.minicolors.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('matrix/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('matrix/assets/libs/quill/dist/quill.snow.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{!! asset('matrix/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') !!}"></script>
    <script src="{!! asset('matrix/dist/js/pages/mask/mask.init.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/select2/dist/js/select2.full.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/select2/dist/js/select2.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/jquery-asColor/dist/jquery-asColor.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/jquery-asGradient/dist/jquery-asGradient.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/jquery-minicolors/jquery.minicolors.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/quill/dist/quill.min.js') !!}"></script>
    <script>
        $(".select2").select2();
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>
@endsection
