window.onload = initmap;
var mymap;
function initmap()
{
    mymap = L.map('mapid').setView([ 43.30932,-1.97711], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/marborav/cj9x42mma6cqq2sp7e7gadryt/tiles/256/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 20,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoibWFyYm9yYXYiLCJhIjoiY2o5eDJrbTV0N2NncjJxcXljeDR3cXNhMiJ9.igTamTLm4nLiAN6w8NFS6Q'
    }).addTo(mymap);


    mymap.locate({setView: true, maxZoom: 24});

    mymap.on('locationfound', onLocationFound);

    mymap.on('locationerror', onLocationError);

}



function onLocationFound(e) {
    var radius = e.accuracy / 10;

    L.marker(e.latlng).addTo(mymap)
        .bindPopup("Estás situado" + radius + " dentro de este radio").openPopup();

    L.circle(e.latlng, radius).addTo(mymap);
}


function onLocationError(e) {
    alert(e.message);
}

