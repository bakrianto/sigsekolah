<?php session_start(); ?>
<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM `tb_bukutamu`");
?>
<div class="row">
<?php if ($_SESSION['username']=="admin") {?>
    <div class="container">
        <div class="pull-left">
            <h1>Data bukutamu</h1>
        </div>
        <hr style="margin-top: 0px; ">
    </div>
    <div class="container">
        <table class="table table-bordered table-responsive table-striped">
          <tr>
            <th>No</th>
            <th>Nama Pengunjung</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Pesan</th>
          </tr>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama"]?></td>
            <td><?=$data["alamat"]?></td>
            <td><?=$data["email"]?></td>
            <td><?=$data["pesan"]?></td>
          </tr>
        <?php } ?>
        </table>
    </div>
    <?php } else { ?>
    <div class="container">
        <hr style="margin-top: 0px; ">
    </div>

    <div class="container"> 
        <?php include "buku_form.php"; ?>
    </div>  
   <?php } ?>
</div>