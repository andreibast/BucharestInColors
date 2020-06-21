function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: {lat: 44.452459, lng:26.085615},
        mapTypeId: 'terrain'
    });
    
    //1.Districts coordonates
        var Sector1Coords = [
            {lat: 44.470, lng: 25.9795},
            {lat: 44.492, lng: 25.987},
            {lat: 44.513, lng: 26.010},
            {lat: 44.523, lng: 26.033},
            {lat: 44.534, lng: 26.068},

            {lat: 44.539, lng: 26.104},
            {lat: 44.487, lng: 26.114},
            {lat: 44.488, lng: 26.105},
            {lat: 44.486, lng: 26.102},
            {lat: 44.478, lng: 26.102},
            {lat: 44.472, lng: 26.105},

            {lat: 44.451, lng: 26.101},
            {lat: 44.437, lng: 26.101},

            {lat: 44.435, lng: 26.106}, 
            {lat: 44.434, lng: 26.098},

            {lat: 44.434, lng: 26.078}, 
            {lat: 44.438, lng: 26.070},
            {lat: 44.440, lng: 26.073},

            {lat: 44.457, lng: 26.055},
            {lat: 44.479, lng: 26.002},
            {lat: 44.478, lng: 25.988},
            {lat: 44.470, lng: 25.9795}
        ];

        var Sector2Coords = [
            {lat: 44.479, lng: 26.184},
            {lat: 44.456, lng: 26.156},
            {lat: 44.453, lng: 26.176},
            {lat: 44.442, lng: 26.197},

            {lat: 44.432, lng: 26.138},
            {lat: 44.435, lng: 26.106},

            {lat: 44.437, lng: 26.101},
            {lat: 44.451, lng: 26.101},
            {lat: 44.472, lng: 26.105},
            {lat: 44.478, lng: 26.102},

            {lat: 44.486, lng: 26.102},
            {lat: 44.488, lng: 26.105},
            {lat: 44.479, lng: 26.184}
        ];

        var Sector3Coords = [
        {lat: 44.432, lng: 26.225},
        {lat: 44.424, lng: 26.224},
        {lat: 44.406, lng: 26.218},
        {lat: 44.394, lng: 26.211},

        {lat: 44.393, lng: 26.180},
        {lat: 44.409, lng: 26.122},
        {lat: 44.425, lng: 26.108},
        
        {lat: 44.429, lng: 26.096},
        {lat: 44.434, lng: 26.098},

        {lat: 44.435, lng: 26.106},
        {lat: 44.432, lng: 26.138},
        {lat: 44.442, lng: 26.197},
        {lat: 44.432, lng: 26.225}
        ];

        var Sector4Coords = [
            {lat: 44.398, lng: 26.162},
            {lat: 44.368, lng: 26.142},
            {lat: 44.342, lng: 26.167},
            {lat: 44.334, lng: 26.151},
    
            {lat: 44.348, lng: 26.127},
            {lat: 44.351, lng: 26.130},
            {lat: 44.361, lng: 26.109},
            {lat: 44.358, lng: 26.106},
            {lat: 44.360, lng: 26.095},

            {lat: 44.369, lng: 26.089},
            {lat: 44.403, lng: 26.096},
            {lat: 44.415, lng: 26.093},
            {lat: 44.420, lng: 26.087},

            {lat: 44.429, lng: 26.096},
            {lat: 44.425, lng: 26.108},
            {lat: 44.409, lng: 26.122},
            {lat: 44.398, lng: 26.162}
        ];

        var Sector5Coords = [
            {lat: 44.434, lng: 26.098},
            {lat: 44.429, lng: 26.096},
            {lat: 44.420, lng: 26.087}, 
            {lat: 44.415, lng: 26.093}, 
            {lat: 44.403, lng: 26.096}, 

            {lat: 44.369, lng: 26.089}, 
            {lat: 44.374, lng: 26.045},
            {lat: 44.405, lng: 26.010},
            {lat: 44.401, lng: 26.003},
            {lat: 44.402, lng: 25.997},
            {lat: 44.406, lng: 25.996},

            {lat: 44.409, lng: 25.999},
            {lat: 44.414, lng: 26.034},
            {lat: 44.410, lng: 26.044},
            {lat: 44.419, lng: 26.059},
            {lat: 44.434, lng: 26.059},
            {lat: 44.438, lng: 26.070}, 
            {lat: 44.434, lng: 26.078},
            {lat: 44.434, lng: 26.098}
        ];

        var Sector6Coords = [
            {lat: 44.440, lng: 25.966},
            {lat: 44.443, lng: 26.012},
            {lat: 44.446, lng: 26.020},
            {lat: 44.449, lng: 26.015},
            {lat: 44.454, lng: 26.013},
            {lat: 44.455, lng: 26.015},
            {lat: 44.466, lng: 25.981},
            {lat: 44.463, lng: 25.972},

            {lat: 44.478, lng: 25.988},
            {lat: 44.479, lng: 26.002},
            {lat: 44.457, lng: 26.055},
            {lat: 44.440, lng: 26.073},
            {lat: 44.438, lng: 26.070},
            {lat: 44.434, lng: 26.059},
            {lat: 44.419, lng: 26.059},
            {lat: 44.410, lng: 26.044},

            {lat: 44.414, lng: 26.034},
            {lat: 44.4058, lng: 25.976},
            {lat: 44.422, lng: 25.968},
            {lat: 44.440, lng: 25.966}
        ];


    //2.Districts CSS
        var sector1Polygon = new google.maps.Polygon({
            paths: Sector1Coords,
            strokeColor: '#FF0000',
            strokeOpacity: 0.7,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.5
        });

        var sector2Polygon = new google.maps.Polygon({
            paths: Sector2Coords,
            strokeColor: '#ff8c00',
            strokeOpacity: 0.7,
            strokeWeight: 2,
            fillColor: '#ff8c00',
            fillOpacity: 0.5
        });

        var sector3Polygon = new google.maps.Polygon({
        paths: Sector3Coords,
        strokeColor: '#ffed00',
        strokeOpacity: 0.9,
        strokeWeight: 2,
        fillColor: '#ffed00',
        fillOpacity: 0.5
        });

        var sector4Polygon = new google.maps.Polygon({
            paths: Sector4Coords,
            strokeColor: '#008026',
            strokeOpacity: 0.9,
            strokeWeight: 2,
            fillColor: '#008026',
            fillOpacity: 0.5
        });

        var sector5Polygon = new google.maps.Polygon({
            paths: Sector5Coords,
            strokeColor: '#004dff',
            strokeOpacity: 0.9,
            strokeWeight: 2,
            fillColor: '#004dff',
            fillOpacity: 0.5
        });

        var sector6Polygon = new google.maps.Polygon({
            paths: Sector6Coords,
            strokeColor: '#750787',
            strokeOpacity: 0.9,
            strokeWeight: 2,
            fillColor: '#750787',
            fillOpacity: 0.5
        });


    //3.Put highlights in the map
        sector1Polygon.setMap(map);
        sector2Polygon.setMap(map);
        sector3Polygon.setMap(map);
        sector4Polygon.setMap(map);
        sector5Polygon.setMap(map);
        sector6Polygon.setMap(map);

}