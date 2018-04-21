<?php 
include 'koneksi.php';
$i++;
$query = "SELECT *
FROM tb_inventaris
LEFT JOIN tb_kategori USING (id_kategori)
LEFT JOIN tb_ruang USING (id_ruang) WHERE id_inventaris = '$_GET[id_inventaris]'";
$q = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($q)) {
	/*echo "<pre>", print_r($data);*/
	$kd_barang = $data['kd_barang'];
	$nomor = "0".$data["id_kategori"].".0".$data["id_ruang"].".0".$data["id_inventaris"];
    $kategori = $data["nama_kategori"];
    $letak = $data["nama_ruang"];
    $asal = $data["asal"];
    $beli = $data["tgl_pembelian"];
    $pembeli = $data["dibeli_oleh"];
   	$harga = $data["nilai_pembelian"];
    $merk = $data["merk"];
    $jumlah = $data["jumlah"];
    $register = $data["register"];
    $bahan = $data["bahan"];
    $satuan = $data["satuan"];
    $hargajual = $data["nilai_saat_ini"];
    $kondisi = $data["kondisi"];
    $foto = $data["pict"];
    $ket = $data["ket"];
    
	echo "
        <div class='col-md-3 text-left'>
            <h4>Kode Barang</h4>
            <h4>Kategori</h4>
            <h4>Letak</h4>
            <h4>Asal</h4>
            <h4>Tanggal Beli</h4>
            <h4>Dibeli Oleh</h4>
            <h4>Harga Beli</h4>
            <h4>Merk/Tipe/Ukuran</h4>
            <h4>Jumlah Beli</h4>
            <h4>Register</h4>
            <h4>Bahan</h4>
            <h4>Satuan</h4>
            <h4>Kondisi</h4>
            <h4>Keterangan</h4>            
            <h4>Foto</h4>

	    </div>

		<div class='col-md-9 text-left'>
			<h4>: $kd_barang</h4>
            <h4>: $kategori</h4>
            <h4>: $letak</h4>
            <h4>: $asal</h4>
            <h4>: $beli</h4>
            <h4>: $pembeli</h4>
            <h4>: Rp. $harga</h4>
            <h4>: $merk</h4>
            <h4>: $jumlah</h4>
            <h4>: $register</h4>
            <h4>: $bahan</h4>
            <h4>: $satuan</h4>
            <h4>: $kondisi</h4>
            <h4>: $ket</h4>            
            <h4>: <img style='width: 150px' src='./images/barang/$foto.'></h4>
		</div>
         ";
}
?>
<div class="col-md-12 text-left">
    <a href="?pg=inventaris" class="btn btn-primary">Kembali</a>
</div>