<?php session_start(); ?>
<?php
include_once("koneksi.php");
// $q=mysqli_query($conn, "SELECT id_ruang, id_kategori, id_inventaris, nama_inventaris, nama_kategori, nama_ruang, asal, tgl_pembelian, dibeli_oleh, nilai_pembelian, merk, nilai_saat_ini, kondisi, COUNT(nama_inventaris) AS jumlah, ket
// FROM tb_inventaris
// LEFT JOIN tb_kategori USING (id_kategori)
// LEFT JOIN tb_ruang USING (id_ruang) GROUP BY nama_inventaris");

$q=mysqli_query($conn, 'SELECT * FROM tb_inventaris 
    LEFT JOIN tb_kategori ON tb_kategori.id_kategori=tb_inventaris.id_kategori 
    LEFT JOIN tb_ruang ON tb_ruang.id_ruang=tb_inventaris.id_ruang 
    ORDER BY id_inventaris DESC');

$inventaris = mysqli_query($conn, "SELECT id_ruang, id_kategori, id_inventaris FROM tb_inventaris");
?>
<div class="row">
<?php 
if ($_SESSION['username'] == "admin"){ ?>
    <div class="container">
        <!-- <div class="pull-left"> -->
            <h1>Data inventaris</h1>
            <hr>
    </div>
    <div class="container"> 
        <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=inventaris_form"><i class="fa fa-plus fa-fw"></i> Tambah</a></div>
    </div>

    <div class="container scrollmenu">

        <table class="table table-bordered table-responsive table-striped data">
        <thead>
          <tr>
            <th>No</th>
            <th>Kategori Barang</th>
            <th>Kode Barang</th>
            <th>Letak</th>
            <th>Asal</th>
            <th>Tanggal</th>
            <th>Umur</th>
            <th>Harga Total</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Penyusutan (Bulan)</th>
            <th>Habis</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead> 
        <tbody>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;
        $habis= date('Y-m-d', strtotime('+'.$data["penyusutan"].' month', strtotime( $data["tgl_pembelian"] )));
        $pen = 1 / $data["penyusutan"] * $data["jumlah"] * $data["nilai_pembelian"];
        ?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama_kategori"]?></td>
            <td><?=$data["kd_barang"]?></td>
            <td><?=$data["nama_ruang"]?></td>
            <td><?=$data["asal"]?></td>
            <td><?=$data["tgl_pembelian"]?></td>
            <td><?=$data["penyusutan"]?> Bulan</td>
            <td>Rp. <?=$data["nilai_pembelian"]?></td>
            <td><?=$data["kondisi"]?></td>
            <td><?=$data['ket'];?></td>
            <td>Rp. <?=ceil($pen)  ?></td>
            <td><?= $habis ?></td>
            <td><a class="btn btn-warning" href="?pg=inventaris_tampil&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-search-plus fa-fw"></i></a>&nbsp;<a class="btn btn-info" href="?pg=inventaris_form&act=edit&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-pencil fa-fw"></i></a>&nbsp;<a class="btn btn-danger" href="?pg=inventaris_hapus&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-trash-o fa-fw"></i></a></td>
          </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
    <?php }
    else { ?>
   <div class="container">
        <div class="text-center">
            <h1>Denah Ruangan SLB Marganingsih</h1>           
        </div>
    </div>
    <div class="container">
        <hr style="margin-top: 1px; "> 
    </div>

    <div class="container" style="margin-bottom: -80px">

    <?php 
        include "inventaris_denah.php";
    ?>
    </div>
    <?php } ?>
</div>
 