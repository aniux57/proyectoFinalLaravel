@extends('layouts.portal')

@section('title', 'Sucursales')
@section('sucursales', 'active')

@section('content')
<div id="map" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="google-map__contact my-map"></div>
@endsection

@section('scripts')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfFyFAL40PGz0E_3yBTC2FU2qbao00Y2A&callback=initMap"></script>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: 14.8888355, lng: -91.615631}
        });
        @foreach ($sucursales as $sucursal)
            var marker = new google.maps.Marker({
                position: {lat: {{ $sucursal -> latitud }}, lng: {{ $sucursal -> longitud }}},
                map: map
            });
        @endforeach
    }
</script>
@endsection
