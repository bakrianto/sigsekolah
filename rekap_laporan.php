<?php

include "pdf/class.ezpdf.php"; //class ezpdf yg di panggil
$pdf = new Cezpdf('A4','landscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Courier.afm');

//Tampilkan gambar di dokumen PDF
$pdf->addJpegFromFile('sipi.jpg',31,778,90);

//Teks di tengah atas untuk judul header
$pdf->addText(280, 520, 20,'<b>Laporan Inventaris</b>');
$pdf->addText(315, 490, 14,'<b> SLB Marganingsih</b>');

//Garis atas untuk header
$pdf->line(31, 470, 800, 470);

//Garis bawah untuk footer
$pdf->line(31, 50, 800, 50);

//Teks kiri bawah
$pdf->addText(110,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

// Baca input tanggal yang dikirimkan user
$dari = date_format(date_create($_POST['awal']), 'Y-m-d');
$sampai = date_format(date_create($_POST['akhir']), 'Y-m-d');
//echo "$mulai $selesai";exit;

//Menampilkan isi dari database
//Koneksi ke database dan tampilkan datanya
include 'koneksi.php';
// $angkatan=$_GET['angkatan'];
$tampil = "SELECT id_ruang, id_kategori, id_inventaris, nama_inventaris, nama_kategori, nama_ruang, asal, tgl_pembelian, dibeli_oleh, nilai_pembelian, merk, nilai_saat_ini, kondisi, ket
FROM tb_inventaris
INNER JOIN tb_kategori USING (id_kategori)
INNER JOIN tb_ruang USING (id_ruang) group by nama_inventaris";
//echo $tampil;exit;
$sql = mysqli_query($conn,$tampil);

//Menghitung jumlah data pada database				
$jml = mysqli_num_rows($sql);
//echo $jml;exit;
if ($jml > 0){

$i = 1;
$total=0;
while($r = mysqli_fetch_array($sql)) {

//Format Menampilkan data di ezPdf
	$data[$i]=array('No'=>$i,
			       'Nama Barang'=>"$r[nama_inventaris]",
				   'Kode Barang'=>"0$r[id_ruang].0$r[id_kategori].0$r[id_inventaris]",
				   'Asal'=>"$r[asal]",
				   'Tanggal dibeli'=>"$r[tgl_pembelian]",
				   'Dibeli Oleh'=>"$r[dibeli_oleh]",
				   'Merk'=>"$r[merk]",
				   'Kondisi'=>"$r[kondisi]",
				   );
	$i++;
	$total=$total+$r['total'];
}

//Tampilkan Dalam Bentuk Table
$pdf->ezText("\n\n\n\n\n\n");
$pdf->ezTable($data);

$pdf->ezText("\n\n Range Laporan: $dari - $sampai. ");
//$pdf->ezText("Total Bayar: Rp. $total. ");

// Penomoran halaman
//$pdf->ezStartPageNumbers(564, 20, 8);
$pdf->ezStream();
}

else{

	echo "
	<script>
	alert('Data Transaksi Tidak Ada');
	window.location=\"index.php?pg=laporan\";
	</script>
	";

}

?>