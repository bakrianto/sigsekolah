<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM `tb_ruang`");
?>
<div class="row">
<div class="container">
    <div class="pull-left">
        <h1>Ruang</h1>
    </div>
    <hr style="margin-top: 0px; ">
</div>
<!-- <div class="container">
    <div class="pull-right" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=ruang_form"><i class="fa fa-plus fa-fw"></i> Tambah</a></div>
</div> -->
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Nama Ruang</th>
        <!-- <th>Jumlah Awal</th>
        <th>Jumlah Akhir</th>
        <th>Satuan</th> -->
        <th>Aksi</th>
      </tr>
    <?php
    while ($data=mysqli_fetch_assoc($q)){ 
    $i = 1;
    ?>
      <tr>
        <td><?=$data['id_ruang'];?></td>
        <td><?=$data["nama_ruang"]?></td>
        <td><a class="btn btn-info" href="?pg=ruang_form&act=edit&id_ruang=<?=$data["id_ruang"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=ruang_hapus&id_ruang=<?=$data["id_ruang"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
 </div>
 </div>