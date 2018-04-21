<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM `tb_kategori`");
?>

<div class="row">
<div class="container">
    <div class="pull-left">
        <h1>Data Jenis Barang</h1>
    </div>
    <hr style="margin-top: 0px; ">
</div>
<div class="container">
    <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=kategori_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
    </div>
</div>
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Jenis Barang</th>
        <th>Penyusutan (Bulan)</th>
        <th>Aksi</th>
      </tr>
    <?php
    while ($data=mysqli_fetch_assoc($q)){ 
    $i++;?>
      <tr>
        <td><?=$i?></td>
        <td><?=$data["nama_kategori"]?></td>
        <td><?=$data["penyusutan"]?> Bulan</td>
        <td><a class="btn btn-info" href="?pg=kategori_form&act=edit&id_kategori=<?=$data["id_kategori"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=kategori_hapus&id_kategori=<?=$data["id_kategori"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
