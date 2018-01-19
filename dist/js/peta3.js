function initMap() {

  var myLatlng = {lat: -7.736103, lng: 110.432103};

  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatlng,
    zoom: 21,
    mapTypeId: 'satellite',
    
  });

  var lokasi = [ {lat: -7.736108, lng: 110.432088},
                 {lat: -7.736053, lng: 110.432122},
                 {lat: -7.736083, lng: 110.431670},
                 {lat: -7.736088, lng: 110.432434},
                 {lat: -7.736135, lng: 110.432376},
                 {lat: -7.736079, lng: 110.432298},
                 {lat: -7.736132, lng: 110.432293},
                 {lat: -7.736066, lng: 110.431869},
                 {lat: -7.736104, lng: 110.431838},
                 {lat: -7.736077, lng: 110.431543},
                 {lat: -7.736093, lng: 110.431336},
                 {lat: -7.736145, lng: 110.431620},
                 {lat: -7.736137, lng: 110.431665},
                 {lat: -7.736140, lng: 110.431713}
  ];


  var marker = lokasi.map(function(location) {
    return new google.maps.Marker({
      label: location,      
      position: location,
      map: map,
    });
  });

  /*var marker = new google.maps.Marker({
    position: lokasi,
    map: map,
    title: 'SLB MARGANINGSIH',
  });*/

  marker.addListener('click', function() {
    window.location.href="http://localhost/sig_sekolah/index.php?pg=inventaris";
  });
}



function downloadUrl(url, callback) {
var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;

request.onreadystatechange = function() {
  if (request.readyState == 4) {
    request.onreadystatechange = doNothing;
    callback(request, request.status);
  }
};

request.open('GET', url, true);
request.send(null);
}

function doNothing() {}