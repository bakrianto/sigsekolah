<?php
  include_once("koneksi.php");
if(!empty($_GET['id_inventaris'])){
  $base_url = "http://http://192.168.8.105/sig_sekolah/";
  $q="SELECT * FROM `tb_inventaris` WHERE id_inventaris='$_GET[id_inventaris]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=inventaris_edit";
}else{
  $action="?pg=inventaris_tambah";
}
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Form tambah/edit inventaris</h1>
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel"><a class="btn btn-info" href="?pg=inventaris"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
      <div class="col-md-11 alert alert-warning">
          <strong>Peringatan!</strong> Ukuran File Tidak Boleh Melebihi 2MB
      </div>
      <form class="form" action="<?=$action?>" method="post" enctype="multipart/form-data">
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Kode Barang</label>
            <input type="text" class="form-control" name="kd_barang" placeholder="Kode barang" value="<?=$data[kd_barang]?>" />
          </tr>
          </div>
          </div>
          <?php 
          $q=mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY id_kategori ASC;");
           ?>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Kategori Barang</label>
            <select class="form-control" name="id_kategori">
              <?php 
                  if ($_GET['act']=="edit") {
                      while ($kat = mysqli_fetch_assoc($q)) {
                          if ($data['id_kategori'] == $kat['id_kategori']) {
                              echo '<option value="'.$kat['id_kategori'].'" selected>'.$kat['nama_kategori'].'</option>';
                          } else {
                              echo '<option value="'.$kat['id_kategori'].'">'.$kat['nama_kategori'].'</option>';
                          }
                      }
                  } else {
                      echo "<option>Pilih Kategori</option>";
                      while ($kat = mysqli_fetch_assoc($q)) {
                          echo '<option value="'.$kat['id_kategori'].'">'.$kat['nama_kategori'].'</option>';
                      }
                  }
              ?>   
            </select>
          </tr>
          </div>
          </div>
          <?php 
            $r = mysqli_query($conn, "SELECT * FROM tb_ruang ORDER BY id_ruang ASC");
           ?>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Ruang</label>
            <select class="form-control" name="id_ruang">
              <?php 
                  if ($_GET['act']=="edit") {
                      while ($rng = mysqli_fetch_assoc($r)) {
                          if ($data['id_ruang'] == $rng['id_ruang']) {
                              echo '<option value="'.$rng['id_ruang'].'" selected>'.$rng['nama_ruang'].'</option>';
                          } else {
                              echo '<option value="'.$rng['id_ruang'].'">'.$rng['nama_ruang'].'</option>';
                          }
                      }
                  } else {
                      echo "<option>Pilih ruang</option>";
                      while ($rng = mysqli_fetch_assoc($r)) {
                          echo '<option value="'.$rng['id_ruang'].'">'.$rng['nama_ruang'].'</option>';
                      }
                  }
              ?> 
              <?php 
                if (mysqli_num_rows($r)>0) {
                    while ($row = mysqli_fetch_assoc($r)) { ?>
                      <option value=" <?php echo $row['id_ruang']; ?> "><?php echo $row['nama_ruang']; ?></option>
                    <?php } ?>
                  <?php }
               ?>
            </select>
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
            <div class="form-group">
            <tr>
              <label style="width: 200px">Asal</label>
              <div class="radio">
              <input type="radio" name="asal" value="Hibah" <?php echo $asal = ($data[asal]=='Hibah') ? 'checked' : '' ; ?>/> Hibah <br>
              <input type="radio" name="asal" value="Dana" <?php echo $asal = ($data[asal]=='Dana') ? 'checked' : '' ; ?>/> Dana <br>
              <input type="radio" name="asal" value="Bos" <?php echo $asal = ($data[asal]=='Bos') ? 'checked' : '' ; ?>/> BOS <br>
              <input type="radio" name="asal" value="Komite" <?php echo $asal = ($data[asal]=='Komite') ? 'checked' : '' ; ?>/> Komite <br>
              <input type="radio" name="asal" value="Yayasan" <?php echo $asal = ($data[asal]=='Yayasan') ? 'checked' : '' ; ?>/> Yayasan <br>
              <input type="radio" name="asal" value="APBN" <?php echo $asal = ($data[asal]=='APBN') ? 'checked' : '' ; ?>/> APBN <br>
              <input type="radio" name="asal" value="APBD" <?php echo $asal = ($data[asal]=='APBD') ? 'checked' : '' ; ?>/> APBD <br>

              </div>
              
            </tr>
            </div>
          </div>
        
          </tr>
          <div class="form-inline" style="padding-bottom: 10px">
            <div class="form-group">
            <tr>
              <label style="width: 200px">Tanggal dibeli</label>
              <input type="date" class="form-control" name="tgl_pembelian" placeholder="Tanggal dibeli" value="<?=$data[tgl_pembelian]?>" />
            </tr>
            </div>
          </div>
          
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Dibeli Oleh</label>
            <input type="text" class="form-control" name="dibeli_oleh" placeholder="Dibeli Oleh" value="<?=$data[dibeli_oleh]?>" />
          </tr>
          </div>
          </div>
          
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Harga Beli</label>
              <input type="text" class="form-control" name="nilai_pembelian" placeholder="Nilai Beli" value="<?=$data[nilai_pembelian]?>" />
            </tr>
          </div>         
          </div>

          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Jumlah Beli</label>
              <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Beli" value="<?=$data[jumlah]?>" />
            </tr>
          </div>         
          </div>

          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Register</label>
              <input type="text" class="form-control" name="register" placeholder="001 - 010" value="<?=$data[register]?>" />
            </tr>
          </div>         
          </div>

          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Bahan</label>
              <input type="text" class="form-control" name="bahan" placeholder="Bahan" value="<?=$data[bahan]?>" />
            </tr>
          </div>         
          </div>

          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Satuan</label>
              <input type="text" class="form-control" name="satuan" placeholder="PCS" value="<?=$data[satuan]?>" />
            </tr>
          </div>         
          </div>
         
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Merk</label>
            <input type="text" class="form-control" name="merk" placeholder="Merk" value="<?=$data[merk]?>" />
          </tr>
          </div>
          </div>
          
          <div class="form-inline" style="padding-bottom: 10px">
            <div class="form-group">
            <tr>
              <label style="width: 200px">Kondisi</label>
              <input type="text" class="form-control" name="kondisi" placeholder="Kondisi" value="<?=$data[kondisi]?>" />
            </tr>
            
            </div>
          </div>
          
          <div class="form-inline" style="padding-bottom: 10px">
            <div class="form-group">
            <tr>
              <label style="width: 200px">Keterangan</label>
              <input type="text" class="form-control" name="ket" placeholder="Keterangan" value="<?=$data[ket]?>" />
            </tr>
            </div>
          </div>
          
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Foto</label>
            <input type="file" class="form-control" name="foto" ><!-- <?php echo $req = ($_GET['act']!='edit') ? 'required' : '' ; ?> -->
            <div style="margin-left: 205px; padding-top: 10px;">
              <span><img style="width:150px" src="images/barang/<?= $data[pict]?>"></span>
            </div>
          </tr>
          </div>
          </div>
          
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <td>
              <?php if($_GET['act']=="edit"){ ?>
              <input type="hidden" class="form-control" name="id_inventaris" value="<?=$data[id_inventaris]?>" />
              <?php } ?>
            </td>
            <td>
              <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-repeat fa-fw"></i> Batal</button> 
            </td>
          </tr>
      </form>
  </div>
</div>