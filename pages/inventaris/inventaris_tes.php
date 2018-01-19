<?php session_start(); ?>
<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT id_inventaris, nama_inventaris, nama_kategori, nama_ruang, nomor_inventaris,tgl_pembelian, dibeli_oleh, nilai_pembelian, nilai_saat_ini
FROM tb_inventaris
INNER JOIN tb_kategori ON tb_inventaris.id_kategori=tb_kategori.id_kategori
INNER JOIN tb_ruang ON tb_inventaris.id_ruang=tb_ruang.id_ruang");
?>
<div class="row">
<!-- menu admin -->
<?php 
if ($_SESSION['username'] == "admin"){ ?>
    <div class="container">
        <div class="pull-left">
            <h1>Data inventaris</h1>
        </div>
        <hr style="margin-top: 0px; ">
    </div>
    <div class="container"> 
        <div class="pull-right" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=inventaris_form"><i class="fa fa-plus fa-fw"></i> Tambah</a></div>
    </div>
    <div class="container">
        <table class="table table-bordered table-responsive table-striped">
          <tr>
            <th>No</th>
            <th>Nama Inventaris</th>
            <th>No inventaris</th>
            <th>Kategori</th>
            <th>Ruang</th>
            <th>Tgl. Beli</th>
            <th>Dibeli Oleh</th>
            <th>Nilai Beli</th>
            <th>Nilai Sekarang</th>
            <th>Aksi</th>
          </tr>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama_inventaris"]?></td>
            <td><?=$data["id_inventaris"]?></td>
            <td><?=$data["nama_kategori"]?></td>
            <td><?=$data["nama_ruang"]?></td>
            <td><?=$data["tgl_pembelian"]?></td>
            <td><?=$data["dibeli_oleh"]?></td>
            <td><?=$data["nilai_pembelian"]?></td>
            <td><?=$data["nilai_saat_ini"]?></td>
            <td><a class="btn btn-info" href="?pg=inventaris_form&act=edit&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
        <a class="btn btn-danger" href="?pg=inventaris_hapus&id_inventaris=<?=$data["id_inventaris"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
          </tr>
        <?php } ?>
        </table>
    </div>
    <?php }
    else { ?>
    <!-- menu user -->
   <div class="container">
        <div class="text-center">
            <h1>Denah Ruangan SLB Marganingsih</h1>
        </div>
        <hr style="margin-top: 0px; ">
    </div>
    <!-- button -->
    <?php
        $d=mysqli_query($conn, "SELECT * FROM tb_ruang");
        while ($data=mysqli_fetch_assoc($d)){ ?>
        <div class="col-lg-3 btn" data-toggle="modal" data-target="#myModal" style="border: 1px solid black">
        <div style="height: 150px">
            <label><a href=""><?php echo $data["nama_ruang"];?></a></label> 
        </div>
    </div>
    
    <!-- modal  -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Detail Inventaris</h4>
                </div>
                <div class="modal-body">

				            <table class="table table-striped text-center">
				                <thead>
				                    <tr>
				                        <th>nama inventaris</th>
				                        <th>nomor inventaris</th>
				                    </tr>
				                </thead>
				                <?php 
				                    $inventaris=mysqli_query($conn, "SELECT * FROM tb_ruang INNER JOIN tb_inventaris ON tb_ruang.id_ruang = tb_inventaris.id_ruang AND tb_inventaris.id_ruang ='$data[id_ruang]'");

				                    while ($i=mysqli_fetch_assoc($inventaris)) { ?>

				                <tbody>
				                    <tr>
				                        <td><?php echo $i['nama_inventaris']; ?></td>
				                        <td><?php echo $i['nomor_inventaris']; ?></td>
				                    </tr>
				                </tbody>
				                <?php } ?>
				            </table>
					   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php } ?>
    <?php } ?>
</div>