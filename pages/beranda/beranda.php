<div class="text-center"><h1>PETA LOKASI SLB MARGANINGSIH</h1></div>
<hr>
<!-- <div class="container" style="font-size:200px">
    <div class="col-md-6 col-md-offset-3">
        <div class="input-group">
          <span class="input-group-btn">
            <button type="button" onclick="cari()" data-toggle="modal" data-target="#myModal" class="btn btn-default">Cari Barang</button>
          </span>
          <input type="text" class="form-control" name="cari" id="cari" placeholder="Kursi, Meja, dll ....">
        </div>
    </div>
</div> -->

<div style="padding-top: 15px; padding-left: 45px;">
    <img name="denah" src="images/petaslb.png" width="1080" height="720" id="denah" usemap="#denah">
</div>

<script type="text/javascript">
    function cari() {
        var ini_id = $('#cari').val();
        var id = ini_id.split(' ').join('%20');
        var url = "http://192.168.8.105/sig_sekolah/test.php?id="+id;
        var url2 = "http://localhost/sig_sekolah/test.php?id="+id;
        if (url) {
            $("#menu-cari").load(url);
        } else {
            $("#menu-cari").load(url2);
        } 
        
    }


    $(document).ready(function () {
        var img = $('img');
        img.mapster(
        {
            fillOpacity: 0.1,
            fillColor: "ff0000",
            strokeColor: "3320FF",
            strokeOpacity: 0.8,
            strokeWidth: 4,
            stroke: false,
            isSelectable: true,
            singleSelect: true,
            mapKey: 'name',
            listKey: 'name',
            showToolTip: true,
            toolTipClose: ["tooltip-click", "area-click"],
            areas: [
                {
                    key: "halaman",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=1'>Halaman</a></div>"
                },
                {
                    key: "ruangparkir",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=2'>Ruang Parkir</a></div>"
                },
                {
                    key: "ruangkantin",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=6'>Ruang Kantin</a></div>"
                },
                {
                    key: "tklb",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=7'>TKLB</a></div>"
                },
                {
                    key: "ruangtamu",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=3'>Ruang Tamu</a></div>"
                },
                {
                    key: "ruangtu",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=4'>Ruang TU</a></div>"
                },
                {
                    key: "ruangkepsek",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=5'>Ruang Kep. Sek</a></div>"
                },
                {
                    key: "wcguru",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'>WC Guru</div>"
                },
                {
                    key: "gudang",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=8'>Gudang</a></div>"
                },
                {
                    key: "ruanguks",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=9'>Ruang UKS</a></div>"
                },
                {
                    key: "ruangibadah",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=10'>Ruang Ibadah</a></div>"
                },
                {
                    key: "ruangosis",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=11'>Ruang OSIS</a></div>"
                },
                {
                    key: "gudang2",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=12'>Gudang</a></div>"
                },
                {
                    key: "wcsiswa1",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'>WC Siswa</div>"
                },
                {
                    key: "wcsiswa2",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'>WC Siswa</div>"
                },
                {
                    key: "wcsiswa3",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'>WC Siswa</div>"
                },
                {
                    key: "kolamrenang",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=18'>Kolam Renang</a></div>"
                },
                {
                    key: "ruangkomputer",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=19'>Ruang Komputer</a></div>"
                },
                {
                    key: "kelas",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=16'>Kelas</a></div>"
                },
                {
                    key: "ruangguru",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=21'>Ruang Guru</a></div>"
                },
                {
                    key: "ruangperpus",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=22'>Ruang Perpustakaan</a></div>"
                },
                {
                    key: "ruangkelasx",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=23'>Ruang Kelas X</a></div>"
                },
                {
                    key: "ruangkelasxi",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=24'>Ruang Kelas XI</a></div>"
                },
                {
                    key: "ruangkelasxii",
                    fillColor: "ffffff",
                    toolTip: "<div style='text-align: center; text-decoration: none;'><a href='?pg=beranda&id_ruang=25'>Ruang Kelas XII</a></div>"
                }
            ]
        });
    });
</script>

    <map name="denah" id="mydenah">
        <area shape="circle" name="halaman" coords="938,310,10" href="javascript:;" alt="Halaman" title="Halaman" />
        <area shape="circle" name="ruangparkir" coords="846,289,10" href="javascript:;" alt="Ruang Parkir" title="Ruang Parkir" />
        <area shape="circle" name="ruangkantin" coords="815,288,10" href="javascript:;" alt="Ruang Kantin" title="Ruang Kantin" />
        <area shape="circle" name="ruangtu" coords="819,343,10" href="javascript:;" alt="Ruang TU" title="Ruang TU" />
        <area shape="circle" name="ruangkepsek" coords="843,347,10" href="javascript:;" alt="Ruang Kep. Sek" title="Ruang Kep. Sek" />
        <area shape="circle" name="ruangtamu" coords="838,324,10" href="javascript:;" alt="Ruang Tamu" title="Ruang Tamu" />
        <area shape="circle" name="tklb" coords="784,292,10" href="javascript:;" alt="TKLB" title="TKLB" />
        <area shape="circle" name="wcguru" coords="791,342,10" href="javascript:;" alt="WC Guru" title="WC Guru" />
        <area shape="circle" name="gudang" coords="770,333,10" href="javascript:;" alt="Gudang" title="Gudang" />
        <area shape="circle" name="ruanguks" coords="748,343,10" href="javascript:;" alt="Ruang UKS" title="Ruang UKS" />
        <area shape="circle" name="ruangibadah" coords="727,329,10" href="javascript:;" alt="Ruang Ibadah" title="Ruang Ibadah" />
        <area shape="circle" name="ruangosis" coords="704,343,10" href="javascript:;" alt="Ruang OSIS" title="Ruang OSIS" />
        <area shape="circle" name="gudang2" coords="685,327,10" href="javascript:;" alt="Gudang" title="Gudang" />
        <area shape="circle" name="wcsiswa1" coords="664,344,10" href="javascript:;" alt="WC Siswa" title="WC Siswa" />
        <area shape="circle" name="wcsiswa2" coords="642,339,10" href="javascript:;" alt="WC Siswa" title="WC Siswa" />
        <area shape="circle" name="wcsiswa3" coords="625,347,10" href="javascript:;" alt="WC Siswa" title="WC Siswa" />
        <area shape="circle" name="wcguru" coords="642,287,10" href="javascript:;" alt="WC Guru" title="WC Guru" />
        <area shape="circle" name="kolamrenang" coords="509,292,10" href="javascript:;" alt="Kolam Renang" title="Kolam Renang" />
        <area shape="circle" name="ruangkomputer" coords="572,346,10" href="javascript:;" alt="Ruang Komputer" title="Ruang Komputer" />
        <area shape="circle" name="kelas" coords="546,333,10" href="javascript:;" alt="Kelas" title="Kelas" />
        <area shape="circle" name="ruangguru" coords="519,339,10" href="javascript:;" alt="Ruang Guru" title="Ruang Guru" />
        <area shape="circle" name="ruangperpus" coords="482,333,10" href="javascript:;" alt="Ruang Perpustakaan" title="Ruang Perpustakaan" />
        <area shape="circle" name="ruangkelasx" coords="432,312,10" href="javascript:;" alt="Ruang Kelas X" title="Ruang Kelas X" />
        <area shape="circle" name="ruangkelasxi" coords="387,306,10" href="javascript:;" alt="Ruang Kelas XI" title="Ruang Kelas XI" />
        <area shape="circle" name="ruangkelasxii" coords="346,315,10" href="javascript:;" alt="Ruang Kelas X11" title="Ruang Kelas XII" />
    </map>
<!-- Detail Inventaris -->
<h1 class="text-center">Detail Inventaris</h1>
<?php 
    include "koneksi.php";
    $id_ruang = $_GET['id_ruang'];
?>
<?php 
    $q = mysqli_query($conn, "select * from tb_ruang where id_ruang=$id_ruang");
    while ($n = mysqli_fetch_assoc($q)) {
        echo "<div style='width: 200px; border-radius: 5px;' class='text-center bg-primary'><h3 style='padding: 2%;'><strong>".$n['nama_ruang']."</strong></h3></div>";
    }
?>
<div class="scrollmenu">

<table class="table table-bordered">
    <tr>
        <th>No. </th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
<?php 
$no = 1;
$q = mysqli_query($conn, "select *, COUNT(id_ruang) AS jml_brg from tb_inventaris left join tb_kategori on tb_kategori.id_kategori=tb_inventaris.id_kategori where id_ruang = $id_ruang GROUP BY tb_inventaris.id_kategori"); ?>

<?php while ($data = mysqli_fetch_assoc($q)) {?>
    <tr>
    <td class="text-left"><?= $no++; ?></td>
    <td class="text-left"><?php echo $data['nama_kategori']; ?></td>
    <td class="text-left"><?php echo $data['jml_brg']; ?> Unit</td>
    <td><a class="btn btn-warning" href="?pg=inventaris_kategori&kategori=<?=$data[id_kategori]?>&ruang=<?=$data[id_ruang]?>" data-toggle="modal"><i class="fa fa-search-plus"></i> Detail</a></td>
    </tr>
<?php }

// echo "----".mysqli_info($con);
?>
</table>
</div>

<!-- Large Model -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informasi Detail Inventaris</h4>
    </div>

    <div class="modal-body">
        <!-- <div id="menu-cari"></div> -->
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>