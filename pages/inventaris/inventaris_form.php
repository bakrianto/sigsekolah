<?php
  include_once("koneksi.php");
if(!empty($_GET['id_inventaris'])){
  $base_url = "http://localhost/sig_sekolah/";
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
      <form class="form" action="<?=$action?>" method="post" enctype="multipart/form-data">
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Nama</label>
            <input type="text" class="form-control" name="nama_inventaris" placeholder="Nama inventaris" value="<?=$data[nama_inventaris]?>" />
          </tr>
          </div>
          </div>
          <?php 
          $q=mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY id_kategori ASC;");
           ?>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Kategori</label>
            <select class="form-control" name="id_kategori">
              <option value="<?php echo $row['id_kategori']; ?>">Pilih Kategori</option>   
              <?php if (mysqli_num_rows($q)>0) { ?>
                <?php while ($row=mysqli_fetch_array($q)) {?>
                  <option value=" <?php echo $row['id_kategori']; ?> "><?php echo $row['nama_kategori']; ?></option>
                <?php } ?>
             <?php } ?>
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
              <option>Pilih Ruang</option>
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
            <input type="radio" name="asal" value="Hibah"/> Hibah <br>
            <input type="radio" name="asal" value="Dana"/> Dana <br>
            <input type="radio" name="asal" value="Bos"/> BOS <br>
            <input type="radio" name="asal" value="Komite"/> Komite <br>
            <input type="radio" name="asal" value="Yayasan"/> Yayasan <br>
            <input type="radio" name="asal" value="APBN"/> APBN <br>
            <input type="radio" name="asal" value="APBD"/> APBD <br>

            </div>
            <!-- <select name="asal" class="form-control">
             <option>Pilih Asal</option>
             <optgroup label="Hibah">
               <option>Hibah</option>
             <optgroup label="Beli">
               <option>Dana </option>
               <option>BOS</option>
               <option>Komite Sekolah</option>
               <option>Yayasan</option>
               <option>APBN</option>
               <option>APBD</option>
            </select> -->
          </tr>
          </div>
          </div>
          <!-- <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">No. Inventaris</label>
            <input type="text" class="form-control" name="nomor_inventaris" placeholder="Nomor inventaris" value="<?=$data[nomor_inventaris]?>" />
          </tr>
          </div>
          </div> -->
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
            <label style="width: 200px">Nilai beli</label>
            <input type="text" class="form-control" name="nilai_pembelian" placeholder="Nilai Beli" value="<?=$data[nilai_pembelian]?>" />
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
            <label style="width: 200px">Nilai Saat Ini</label>
            <input type="text" class="form-control" name="nilai_saat_ini" placeholder="Nilai Saat Ini" value="<?=$data[nilai_saat_ini]?>" />
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Kondisi</label>
            <div class="radio">
                <input type="radio" name="kondisi" id="optionsRadios2" value="Baik">
                Baik <br>
                <input type="radio" name="kondisi" id="optionsRadios2" value="Rusak Ringan">
                Rusak Ringan <br>
                <input type="radio" name="kondisi" id="optionsRadios2" value="Rusak Berat">
                Rusak Berat <br>
            </div>

            <!-- <select name="kondisi" class="form-control">
              <option>Pilih Kondisi</option>
              <option>Baik</option>
              <option>Rusak Ringan</option>
              <option>Rusak Berat</option>
            </select> -->
            <!-- <input type="text" class="form-control" name="kondisi" placeholder="Kondisi" value="<?=$data[kondisi]?>" /> -->
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Foto</label>
            <input type="file" class="form-control" name="foto">
            <div style="margin-left: 205px; padding-top: 10px;">
              <span><img style="width:150px" src="<?=$base_url."/images/barang/".$data[pict]?>"></span>
            </div>
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