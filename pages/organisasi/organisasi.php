<?php 
session_start();
	include 'koneksi.php';

	$query = 'SELECT * FROM tb_organisasi';
	$q = mysqli_query($conn, $query);
?>

<div class="row">
	<?php if ($_SESSION['username']=="admin") {?>
	    <div class="container text-center">
	            <h2>Data Pegawai Sekolah</h2>
	        <hr style="margin-top: 0px; ">
	        
	    </div>
	    <div class="container"> 
        	<div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=organisasi_form"><i class="fa fa-plus fa-fw"></i> Tambah</a></div>
    	</div>
	    <div class="container">
	        <table class="table table-bordered table-responsive table-striped">
	          <tr>
	            <th>No</th>
	            <th>Nama</th>
	            <th>Jabatan</th>
	            <th>Struktural</th>
	            <th>Struktur Aktif</th>
	            <th>Alamat</th>
	            <th>Foto</th>
	            <th>No HP</th>
	            <th class="text-center">Aksi</th>
	          </tr>
	        <?php
	        while ($data=mysqli_fetch_assoc($q)){ 
	        $i++;
	        $s_aktif = ($data['aktif']) ? 'Aktif' : 'Tidak Aktif' ;
	        ?>
	          <tr>
	            <td><?=$i?></td>
	            <td><?=$data["nama"]?></td>
	            <td><?=$data["jabatan"]?></td>
	            <td><?=$data["struktural"]?></td>
	            <td><?=$s_aktif?></td>
	            <td><?=$data["alamat"]?></td>
	            <td style="width:120px" class="text-center"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 100px;width: 100px;background-size: cover;background-position: center;"></div></td>
	            <td><?=$data["no_hp"]?></td>
	            <td class="text-center"><!-- <a class="btn btn-warning" href="?pg=organisasi_tampil&id=<?=$data["id"]?>" title=""><i class="fa fa-search-plus"></i> Detail</a>&nbsp; --><a class="btn btn-info" href="?pg=organisasi_form&act=edit&id=<?=$data["id"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;<a class="btn btn-danger" href="?pg=organisasi_hapus&id=<?=$data["id"]?>"><i class="fa fa-trash-o fa-fw"></i> Hapus</a></td>
	          </tr>
	        <?php } ?>
	        </table>
	    </div>
</div>
	    <?php } else { ?>
	    <div class="container">
	    	<div class="text-center">
            <h1>Struktur Organisasi SLB Marganingsih</h1></div>
	    </div>
	    <div class="container">
	        <hr style="margin-top: 1px; "> 
	    </div>
	    <div class="container"> 
	        <?php include "organisasi_tampil.php"; ?>
	    </div>  
	   <?php } ?>