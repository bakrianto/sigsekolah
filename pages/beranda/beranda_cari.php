<?php 
	include 'koneksi.php';
	$query = "select * from tb_inventaris where nama_inventaris = '$_GET[id]'";
	$q = mysqli_query($conn, $query);
	$no = 1; ?>
			<table class="table table-bordered">
			<caption class="text-center">Hasil Pencarian Inventari Sekolah</caption>
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Ruang</th>
					<th class="text-center">Kode Barang</th>
					<th class="text-center">Kondisi</th>
					<th class="text-center">Merk</th>
				</tr>
			</thead>
	<?php while ($data = mysqli_fetch_assoc($q)) { ?>


			<tbody>
				<tr>
					<td><?=$no++;?></td>
					<td><?=$data['nama_inventaris'];?></td>
					<td><?=$data['id_ruang'];?></td>
					<td><?=$data['nomor_inventaris'];?></td>
					<td><?=$data['kondisi'];?></td>
					<td><?=$data['merk'];?></td>
				</tr>
			</tbody>

<?php	}
	//echo "test".$_GET['id'];
?>
		</table>