<?php 
include 'koneksi.php';
$i++;
$query = "SELECT id_inventaris, nama_inventaris, nama_kategori, nama_ruang, asal, nomor_inventaris,tgl_pembelian, dibeli_oleh, nilai_pembelian, merk, nilai_saat_ini, kondisi, pict, ket
FROM tb_inventaris
INNER JOIN tb_kategori ON tb_inventaris.id_kategori=tb_kategori.id_kategori
INNER JOIN tb_ruang ON tb_inventaris.id_ruang=tb_ruang.id_ruang WHERE id_inventaris='$_GET[id_inventaris]'";
$q = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($q)) {
	/*echo "<pre>", print_r($data);*/
	$nama = $data['nama_inventaris'];
	$nomor = $data["nomor_inventaris"];
    $kategori = $data["nama_kategori"];
    $letak = $data["nama_ruang"];
    $asal = $data["asal"];
    $beli = $data["tgl_pembelian"];
    $pembeli = $data["dibeli_oleh"];
   	$harga = $data["nilai_pembelian"];
    $merk = $data["merk"];
    $hargajual = $data["nilai_saat_ini"];
    $kondisi = $data["kondisi"];
    $foto = $data["pict"];
    $ket = $data["ket"];
    
	echo "
        <div class='col-md-6'>
            <h4>Nama Barang</h4>
            <h4>Nomor Barang</h4>
            <h4>Kategori</h4>
            <h4>Letak</h4>
            <h4>Asal</h4>
            <h4>Tanggal Beli</h4>
            <h4>Dibeli Oleh</h4>
            <h4>Harga Beli</h4>
            <h4>Merk/Tipe/Ukuran</h4>
            <h4>Harga Jual</h4>
            <h4>Kondisi</h4>
            <h4>Keterangan</h4>            
            <h4>Foto</h4>

	    </div>

		<div class='col-md-6'>
			<h4>: $nama</h4>
            <h4>: $nomor</h4>
            <h4>: $kategori</h4>
            <h4>: $letak</h4>
            <h4>: $asal</h4>
            <h4>: $beli</h4>
            <h4>: $pembeli</h4>
            <h4>: $harga</h4>
            <h4>: $merk</h4>
            <h4>: $hargajual</h4>
            <h4>: $kondisi</h4>
            <h4>: $ket</h4>            
            <h4>: <img style='width: 150px' src='./images/barang/$foto.'></h4>
		</div>
         ";
}
?>