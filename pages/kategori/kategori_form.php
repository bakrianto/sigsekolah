<?php
  include_once("koneksi.php");
if(!empty($_GET['id_kategori'])){
  $q="SELECT * FROM `tb_kategori` WHERE id_kategori='$_GET[id_kategori]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=kategori_edit";
}else{
  $action="?pg=kategori_tambah";
}
?>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">Form tambah/edit Jenis Barang</h1>
      </div>
  </div>

  <div class="container-fluid">
      <div class="panel pull-left"><a class="btn btn-info" href="?pg=kategori"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
  </div>

    <div class="container-fluid">
        <form class="form-inline" action="<?=$action?>" method="post">
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Jenis Barang</label></td>
              <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Jenis Barang" value="<?=$data[nama_kategori]?>"/>
            </tr>
          </div>
          <br>
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Penyusutan (Bulan)</label></td>
              <input type="text" class="form-control" name="penyusutan" placeholder="Penyusutan Harga " value="<?=$data[penyusutan]?>"/>
            </tr>
          </div>
          <div style="padding-bottom: 30px">
            <tr>
              <td>
                <?php if($_GET['act']=="edit"){ ?>
                <input type="hidden" name="id_kategori" value="<?=$data[id_kategori]?>" />
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