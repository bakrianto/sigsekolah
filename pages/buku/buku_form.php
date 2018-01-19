<?php
  include_once("koneksi.php");
if(!empty($_GET['id_buku'])){
  $q="SELECT * FROM `tb_bukutamu` WHERE id_buku='$_GET[id_buku]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=buku_edit";
}else{
  $action="?pg=buku_tambah";
}
?>

<div class="row">
    <div class="container">
        <h1 class="page-header">Isi Data Pengunjung</h1>
    </div>
</div>
<div class="container">
  <div class="row">
      <form class="form" action="<?=$action?>" method="post">
        <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
	          <tr>
	            <label style="width: 200px">Nama</label>
	            <input type="text" class="form-control" style="width: 350px" name="nama" placeholder="Nama Tamu" value="<?=$data[nama]?>" />
	          </tr>
	      </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
          <tr>
            <label style="width: 200px">Alamat</label>
            <input type="text" class="form-control" style="width: 350px" name="alamat" placeholder="Alamat" value="<?=$data[alamat]?>" />
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Email</label>
            <input type="text" class="form-control" style="width: 350px" name="email" placeholder="Email" value="<?=$data[email]?>" />
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Pesan</label>
            <textarea class="form-control" style="width: 350px" rows="3" placeholder="Pesan" name="pesan"><?php echo $data[pesan]; ?></textarea>
          </tr>
          </div>
          </div>
          <tr>
            <td>
              <?php if($_GET['act']=="edit"){ ?>
              <input type="hidden" name="id_buku" value="<?=$data[id_buku]?>" />
              <?php } ?>
            </td>
            <td>
              <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</button> 
            </td>
          </tr>
      </form>
  </div>
</div>