<?php
  include_once("koneksi.php");
if(!empty($_GET['id_kategori'])){
  $q="SELECT * FROM `tb_kategori_sub` WHERE id_kategori_sub='$_GET[id_kategori_sub]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=kategori_sub_edit";
}else{
  $action="?pg=kategori_sub_tambah";
}
?>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">Form tambah/edit Kategori</h1>
      </div>
  </div>

  <div class="container-fluid">
      <div class="panel pull-left"><a class="btn btn-info" href="?pg=kategori"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
  </div>

    <div class="container-fluid">
        <form class="form-inline" action="<?=$action?>" method="post">
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Sub Kategori</label></td>
              <input type="text" class="form-control" name="sub_kategori" placeholder="Nama Sub Kategori" value="<?=$data[nama_sub_kategori]?>"/>
            </tr>
          </div>
          <br>
          <div style="padding-bottom: 30px">
            <tr>
              <td>
                <?php if($_GET['act']=="edit"){ ?>
                <input type="hidden" name="id_kategori_sub" value="<?=$data[id_kategori_sub]?>" />
                <?php } ?>
              </td>
              <td>
                <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-repeat fa-fw"></i> Batal</button> 
              </td>
            </tr>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>