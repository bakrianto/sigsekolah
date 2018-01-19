<?php
  include_once("koneksi.php");
if(!empty($_GET['id_ruang'])){
  $q="SELECT * FROM `tb_ruang` WHERE id_ruang='$_GET[id_ruang]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=ruang_edit";
}else{
  $action="?pg=ruang_tambah";
}
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Form tambah/edit ruang</h1>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="panel pull-left"><a class="btn btn-info" href="?pg=ruang"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
  </div>

  <form class="form-inline" action="<?=$action?>" method="post">

  <div class="row">
      <tr>
        <td><label style="width: 200px">Ruang</label></td>
        <input type="text" name="nama_ruang" class="form-control" placeholder="Nama Ruang" value="<?=$data[nama_ruang]?>" />
      </tr>
  </div>

  <div class="row">
    <tr>
      <td>
        <?php if($_GET['act']=="edit"){ ?>
        <input type="hidden" name="id_ruang" value="<?=$data[id_ruang]?>" />
        <?php } ?>
      </td>
      <td>
        <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-repeat fa-fw"></i> Batal</button> 
      </td>
    </tr>
  </div>
  </form>
</div>