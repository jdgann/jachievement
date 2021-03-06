@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<style>
    html, body {
        height: 100%;
        margin: auto;
        padding: auto;
    }
    #map {
        border: 8px solid #4CAF50;
        height: 75%;
        width: 75%;
        margin: auto;
        padding: auto;
        position:relative;
    }
</style>
<title>Schools Map</title>
<meta charset="utf-8">
<body>
<div class="container">
    <h2 class="text-center">Get Involved with Junior Achievement!</h2><br>
    <p>If you would like to volunteer, request a program, or volunteer with Junior Achievement,
        please reach out to a school near you!</p>
</div>


<div id="map" class="row"><br><br></div>


<script>
    var map;
    function initMap() {

    @foreach ($schools as $school)
        var {{$school->map_name}}= {
            info: '<strong>{{$school->school_name}}</strong><br>\
                    {{$school->school_address}}<br>{{$school->school_city}} {{$school->school_zip}}<br>\
                    <a id="direction-{{$school->sequence_num}}">Directions</a>',
            lat: {{$school->school_latitude}},
            long:{{$school->school_longitude}}
        };
    @endforeach
        var locations = [
            @foreach ($schools as $school)
                [{{$school->map_name}}.info, {{$school->map_name}}.lat, {{$school->map_name}}.long, {{$school->sequence_num}}],
            @endforeach
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(41.2523634, -95.9979883),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        var infowindow = new google.maps.InfoWindow({});
        var currentPosition = new google.maps.LatLng(41.2523634, -95.9979883);
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position){
                currentPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            });
        }
        var marker, i;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                    google.maps.event.addDomListener(document.getElementById("direction-" + i), 'click', function () {
                        window.open(
                                "https://www.google.com/maps/dir/" +
                                currentPosition.lat() +
                                "," +
                                currentPosition.lng() +
                                "/" +
                                locations[i][1] +
                                "," +
                                locations[i][2],
                                '_blank'
                        );
                    });
                }
            })(marker, i));
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqOmmqwN3ZKjnKRqO68H3OnCPHohK2okM&callback=initMap"
        async defer></script>
</body>
</html>
@endsection