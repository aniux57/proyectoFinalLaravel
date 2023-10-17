@extends('layouts.console')

@section('styles')
    <link href="{!! asset('matrix/assets/libs/select2/dist/css/select2.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('matrix/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
    <script src="{!! asset('matrix/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') !!}"></script>
    <script src="{!! asset('matrix/dist/js/pages/mask/mask.init.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/select2/dist/js/select2.full.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/select2/dist/js/select2.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/jquery-minicolors/jquery.minicolors.min.js') !!}"></script>
    <script src="{!! asset('matrix/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
    <script>
        $(".select2").select2();
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\.|\-/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
@endsection
