<?php session_start(); ?>
<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT id_ruang, id_kategori, id_inventaris, nama_inventaris, nama_kategori, nama_ruang, asal, nomor_inventaris,tgl_pembelian, dibeli_oleh, nilai_pembelian, merk, nilai_saat_ini, kondisi, ket
FROM tb_inventaris
INNER JOIN tb_kategori USING (id_kategori)
INNER JOIN tb_ruang USING (id_ruang) group by nama_inventaris");

$inventaris = mysqli_query($conn, "SELECT id_ruang, id_kategori, id_inventaris FROM tb_inventaris");
?>
<div class="row">
<?php 
if ($_SESSION['username'] == "admin"){ ?>
    <div class="container">
        <div class="pull-left">
            <h1>Data inventaris</h1>
        </div>
        <hr style="margin-top: 0px; ">
    </div>
    <div class="container"> 
        <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=inventaris_form"><i class="fa fa-plus fa-fw"></i> Tambah</a></div>
    </div>
    <div class="container scrollmenu">
        <table class="table table-bordered table-responsive table-striped data">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <!-- <th>Kategori</th>
            <th>Letak</th> -->
            <th>Asal</th>
            <th>Tanggal Beli</th>
            <th>Dibeli Oleh</th>
            <!-- <th>Harga Beli</th> -->
            <th>Merk/Tipe/Ukuran</th>
            <!-- <th>Harga Jual</th> -->
            <th>Kondisi</th>
           <!--  <th>Keterangan</th> -->
            <th class="text-center">Aksi</th>
          </tr>
        </thead> 
        <tbody>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;
        ?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama_inventaris"]?></td>
            <td>0<?=$data["id_kategori"]?>.0<?=$data["id_ruang"]?>.0<?=$data["id_inventaris"]?></td>
            <!-- <td><?=$data["nama_kategori"]?></td>
            <td><?=$data["nama_ruang"]?></td> -->
            <td><?=$data["asal"]?></td>
            <td><?=$data["tgl_pembelian"]?></td>
            <td><?=$data["dibeli_oleh"]?></td>
           <!--  <td>Rp.<?=$data["nilai_pembelian"]?>,-</td> -->
            <td><?=$data["merk"]?></td>
            <!-- <td>Rp.<?=$data["nilai_saat_ini"]?>,-</td> -->
            <td><?=$data["kondisi"]?></td>
            <!-- <td><?=$data["ket"]?></td> -->
            <td><a class="btn btn-warning" href="?pg=inventaris_tampil&id_inventaris=<?=$data["id_inventaris"]?>" title=""><i class="fa fa-search-plus"></i></a>&nbsp;<a class="btn btn-info" href="?pg=inventaris_form&act=edit&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-pencil fa-fw"></i></a>&nbsp;<a class="btn btn-danger" href="?pg=inventaris_hapus&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-trash-o fa-fw"></i></a></td>
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
 