<div class="form-inline">
	<a onclick="window.history.back();" class="btn btn-info pull-left"><strong><< Kembali</strong></a>
	<h1 class="text-center">Detail Inventaris</h1>
</div>

<?php 
	include "koneksi.php";
	$ruang = $_GET['ruang'];
	$kategori = $_GET['kategori'];
?>
<?php 
	$q = mysqli_query($conn, "select * from tb_kategori where id_kategori=$kategori");
	while ($n = mysqli_fetch_assoc($q)) {
		echo "<div style='width: 200px; border-radius: 5px;' class='text-center bg-primary'><h3 style='padding: 2%;'>".$n['nama_kategori']."</h3></div>";
	}
?>
<div class="scrollmenu">

<table class="table table-bordered">
	<tr>
		<th>No. </th>
		<th>Kategori</th>
		<th>Kode Barang</th>
		<th>Tanggal Beli</th>
		<th>Pembeli</th>
		<th>Harga</th>
		<th>Asal</th>
		<th>Merk/Tipe/Ukuran</th>
		<!-- <th>Harga Sekarang</th> -->
		<th>Kondisi</th>
		<th>Keterangan</th>
		<th>Gambar</th>
	</tr>
<?php 
$no = 1;
$q = mysqli_query($conn, "select * from tb_inventaris left join tb_kategori on tb_kategori.id_kategori=tb_inventaris.id_kategori where id_ruang = $ruang AND tb_inventaris.id_kategori= $kategori"); ?>

<?php while ($data = mysqli_fetch_assoc($q)) {?>
	<tr>
		<td class="text-left"><?= $no++; ?></td>
		<td class="text-left"><?php echo $data['nama_kategori']; ?></td>
		<td class="text-left"><?php echo $data['kd_barang']; ?></td>
		<!-- <td>0<?=$data["id_kategori"]?>.0<?=$data["id_ruang"]?>.0<?=$data["id_inventaris"]?></td> -->
		<td><?php echo $data['tgl_pembelian']; ?></td>
		<td><?php echo $data['dibeli_oleh']; ?></td>
		<td>Rp. <?php echo $data['nilai_pembelian']; ?></td>
		<td><?php echo $data['asal'];?></td>
		<td><?php echo $data['merk']; ?></td>
		<!-- <td><?php echo $data['nilai_saat_ini']; ?></td> -->
		<td class="text-left"><?php echo $data['kondisi']; ?></td>
		<td><?php echo $data['ket']; ?></td>
		<td><img style='width: 150px' src='./images/barang/<?php echo $data[pict]; ?>'></td>
	</tr>
<?php }

// echo "----".mysqli_info($con);
?>
</table>
</div>
<!-- <div class="panel">
	<a class="btn btn-info" href="?pg=inventaris"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a>
</div> -->