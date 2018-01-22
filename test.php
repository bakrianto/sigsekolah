<p>
<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$i = urldecode($id);
	$query = "SELECT * FROM tb_inventaris LEFT JOIN tb_ruang USING (id_ruang) WHERE nama_inventaris = '$i'";
	$q = mysqli_query($conn, $query); 
	$no = 1;
	?>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Ruang</th>
					<th class="text-center">Kode Barang</th>
					<th class="text-center">Kondisi</th>
					<th class="text-center">Harga</th>
					<th class="text-center">Sumber</th>
					<th class="text-center">Tanggal</th>
				</tr>
			</thead>
	<?php while ($data = mysqli_fetch_assoc($q)) { ?>
			<tbody>
				<tr>
					<td><?=$no++;?></td>
					<td><?=$data['nama_inventaris'];?></td>
					<td><?=$data['nama_ruang'];?></td>
					<td>0<?=$data["id_kategori"]?>.0<?=$data["id_ruang"]?>.0<?=$data["id_inventaris"]?></td>
					<td><?=$data['kondisi'];?></td>
					<td>Rp. <?=$data['nilai_pembelian'];?>,00</td>
					<td><?=$data['asal'];?></td>
					<td><?=$data['tgl_pembelian'];?></td>
				</tr>
			</tbody>
		
<?php	}
	//echo "test".$_GET['id'];
?>

</table>
</p>