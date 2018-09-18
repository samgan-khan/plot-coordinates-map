<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Piloting tracks</title>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>

    // This example creates a 2-pixel-wide red polyline showing the path of
    // the first trans-Pacific flight between Oakland, CA, and Brisbane,
    // Australia which was made by Charles Kingsford Smith.
    var coordinates;

    $.ajax({
        async: false,
        url: 'src/coordinates.php',
        datatype: "json",
        type: "GET",
        success: function(response){
            coordinates = JSON.parse(response)
        }
    });

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: {lat: 26.9124, lng: 75.7873},
        });

        var trackRaw = new google.maps.Polyline({
            path: coordinates.raw,
            geodesic: true,
            strokeColor: '#ff2c0e',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        trackRaw.setMap(map);

        var trackSorted = new google.maps.Polyline({
            path: coordinates.sorted,
            geodesic: true,
            strokeColor: '#0a3fff',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        trackSorted.setMap(map);
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=APIKEY&callback=initMap">
</script>
</body>
</html>
