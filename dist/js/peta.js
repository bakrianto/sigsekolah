function initMap() {

  var myLatlng = {lat: -7.736103, lng: 110.432103};
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatlng,
    zoom: 21,
    mapTypeId: 'satellite', 
  });
  var ruang = [
                '<div class=halaman></div>',
                '<div class=parkir></div>',
                '<div class=halaman></div>',
                '<div class=tamu></div>',
                '<div class=tu></div>',
                '<div class=kepsek></div>',
                '<div class=kantin></div>',
                '<div class=tklb></div>',
                '<div class=gudang></div>',
                '<div class=uks></div>',
                '<div class=ibadah></div>',
                '<div class=osis></div>',
                '<div class=gudang></div>',
                '<div class=kesenian></div>',
                '<div class=salon></div>',
                '<div class=boga></div>',
                '<div class=kelas-a></div>',
                '<div class=bk></div>',
                '<div class=renang></div>',
                '<div class=komputer></div>',
                '<div class=kelas-b></div>',
                '<div class=guru></div>',
                '<div class=perpus></div>',
                '<div class=kelasx></div>',
                '<div class=kelasxi></div>',
                '<div class=kelasxii></div>',
                '<div class=wcguru-1></div>',
                '<div class=wcguru-2></div>',
                '<div class=wcsiswa-1></div>',
                '<div class=wcsiswa-2></div>',
                '<div class=wcsiswa-3></div>',
                '<div class=wcsiswa-4></div>',
                '<div class=ruangganti-1></div>',
                '<div class=ruangganti-2></div>',
                '<div class=ruangganti-3></div>',
                '<div class=wcsiswa-5></div>',
                '<div class=wcsiswa-6></div>',
                '<div class=wastafel></div>',
                '<div class=kolam10></div>',
                '<div class=kolam11></div>',
                '<div class=kolam12></div>',
                '<div class=perkebunan></div>',
                '<div class=pertanian></div>',
  ];
   
  //lokasi
  var lokasi = [ [ruang[0], -7.736121, 110.432183, 1],
                 [ruang[1], -7.736053, 110.432122, 2],
                 [ruang[2], -7.736083, 110.431670, 3],
                 [ruang[3], -7.736088, 110.432434, 4],
                 [ruang[4], -7.736135, 110.432376, 5],
                 [ruang[5], -7.736079, 110.432298, 6],
                 [ruang[6], -7.736132, 110.432293, 7],
                 [ruang[7], -7.736140, 110.431869, 8],
                 [ruang[8], -7.736119, 110.432127, 9],
                 [ruang[9], -7.736124, 110.432082, 10],
                 [ruang[10], -7.736102, 110.431381, 11],
                 [ruang[11], -7.736145, 110.431620, 12],
                 [ruang[12], -7.736137, 110.431665, 13],
                 [ruang[13], -7.736140, 110.431713, 14],
                 [ruang[14], -7.736140, 110.431803, 15],
                 [ruang[15], -7.736140, 110.431835, 16],
                 [ruang[16], -7.736060, 110.431891, 17],
                 [ruang[17], -7.736140, 110.431931, 18],
                 [ruang[18], -7.736105, 110.431498, 19],
                 [ruang[19], -7.736116, 110.432026, 20],
                 [ruang[20], -7.736124, 110.432222, 21],
                 [ruang[21], -7.736085, 110.432312, 22],
                 [ruang[22], -7.736066, 110.432152, 23],
                 [ruang[23], -7.736058, 110.432038, 24],
                 [ruang[24], -7.736113, 110.431999, 25],
                 [ruang[25], -7.736130, 110.431970, 26],
                 [ruang[26], -7.736124, 110.431943, 27],

  ];
  var infowindow = new google.maps.InfoWindow();
  var marker, i;

  var ikon = {
    url: 'http://localhost/sig_sekolah/images/marker_baru.ico',
    scaledSize: new google.maps.Size(18, 18)
  }

  for (i = 0; i < lokasi.length; i++) {  
      marker = new google.maps.Marker({
        icon: ikon,
        position: new google.maps.LatLng(lokasi[i][1], lokasi[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(lokasi[i][0]);
          infowindow.open(map, marker);
          halaman();
          parkir();
          tamu();
          tu();
          kepsek();
          kantin();
          tklb();
          gudang();
          uks();
          ibadah();
          osis();
          gudang();
          kesenian();
          salon();
          boga();
          kelasa_a();
          bk();
          renang();
          komputer();
          kelas_b();
          guru();
          perpus();
          kelasx();
          kelasxi();
          kelasxii();
          wcguru1();
          wcguru2();
          wcsiswa1();
          wcsiswa2();
          wcsiswa3();
          wcsiswa4();
          ruangganti1();
          ruangganti2();
          ruangganti3();           
        }
      })(marker, i));
    }
}

function halaman(){
    $.get('http://localhost/sig_sekolah/test.php?&id_ruang=1', function(data) {
      $('.halaman').html(data);
    });
}

var text = "";
var i = 1;
while (i < 10) {
    text += 
    function ruang(i){
        $.get('http://localhost/sig_sekolah/test.php?&id_ruang='+i, function(data) {
          $('.ruang').html(data);
        });
    }
    i++;
}