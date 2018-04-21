<?php
// echo "string";die();
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM `tb_kategori_sub`");
?>

<div class="row">
<div class="container">
    <div class="pull-left">
        <h1>Data Sub Kategori</h1>
    </div>
    <hr style="margin-top: 0px; ">
</div>
<div class="container">
    <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=kategori_sub_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
    </div>
</div>
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Nama Sub Kategori</th>
        <th>Aksi</th>
      </tr>
    <?php
    while ($data=mysqli_fetch_assoc($q)){ 
    $i++;?>
      <tr>
        <td><?=$data["id_kategori"]?></td>
        <td><?=$data["nama_kategori"]?></td>
        <td><?=$data["nama_sub_kategori"]?></td>
        <td><a class="btn btn-info" href="?pg=kategori_sub_form&act=edit&id_kategori_sub=<?=$data["id_kategori_sub"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=kategori_sub_hapus&id_kategori_sub=<?=$data["id_kategori_sub"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
