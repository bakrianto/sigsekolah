<h1 class="text-center">Detail Inventaris</h1>
<?php 
	include "koneksi.php";
	$id_ruang = $_GET['id_ruang'];
?>
<?php 
	$q = mysqli_query($conn, "select * from tb_ruang where id_ruang=$id_ruang");
	while ($n = mysqli_fetch_assoc($q)) {
		echo "<div style='width: 200px;' class='text-center bg-primary'><h3><strong>".$n['nama_ruang']."</strong></h3></div>";
	}
?>
<div class="scrollmenu">

<table class="table table-bordered">
	<tr>
		<th>No. </th>
		<th>Kategori</th>
		<th>Jumlah</th>
		<!-- <th>Tanggal Beli</th> -->
		<!-- <th>Pembeli</th> -->
		<!-- <th>Harga Beli</th> -->
		<!-- <th>Asal</th> -->
		<!-- <th>Merk/Tipe/Ukuran</th> -->
		<!-- <th>Harga Sekarang</th> -->
		<!-- <th>Kondisi</th> -->
		<!-- <th>Keterangan</th> -->
		<th>Aksi</th>
	</tr>
<?php 
$no = 1;
$q = mysqli_query($conn, "select *, COUNT(id_ruang) AS jml_brg from tb_inventaris left join tb_kategori on tb_kategori.id_kategori=tb_inventaris.id_kategori where id_ruang = $id_ruang GROUP BY tb_inventaris.id_kategori"); ?>

<?php while ($data = mysqli_fetch_assoc($q)) {?>
	<tr>
	<td class="text-left"><?= $no++; ?></td>
	<td class="text-left"><?php echo $data['nama_kategori']; ?></td>
	<td class="text-left"><?php echo $data['jml_brg']; ?> Unit</td>
	<!-- <td>0<?=$data["id_kategori"]?>.0<?=$data["id_ruang"]?>.0<?=$data["id_inventaris"]?></td> -->
	<!-- <td><?php echo $data['tgl_pembelian']; ?></td> -->
	<!-- <td><?php echo $data['dibeli_oleh']; ?></td> -->
	<!-- <td><?php echo $data['nilai_pembelian']; ?></td> -->
	<!-- <td><?php echo $data['asal'];?></td> -->
	<!-- <td><?php echo $data['merk']; ?></td> -->
	<!-- <td><?php echo $data['nilai_saat_ini']; ?></td> -->
	<!-- <td class="text-left"><?php echo $data['kondisi']; ?></td> -->
	<!-- <td><?php echo $data['ket']; ?></td> -->
	<td><a class="btn btn-warning" href="?pg=inventaris_kategori&kategori=<?=$data[id_kategori]?>&ruang=<?=$data[id_ruang]?>"><i class="fa fa-search-plus"></i> Detail</a></td>
	</tr>
<?php }

// echo "----".mysqli_info($con);
?>
</table>
</div>
<!-- <div class="panel">
	<a class="btn btn-info" href="?pg=inventaris"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a>
</div> -->