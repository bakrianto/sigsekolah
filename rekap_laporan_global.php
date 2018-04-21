<?php

include "pdf/class.ezpdf.php"; //class ezpdf yg di panggil
$pdf = new Cezpdf('A4','landscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');

//Tampilkan gambar di dokumen PDF
$pdf->addJpegFromFile('sipi.jpg',31,778,90);

//Teks di tengah atas untuk judul header
$pdf->addText(320, 560, 14,'<b>LAPORAN INVENTARIS</b>');
$pdf->addText(260, 540, 14,'<b>SEKOLAH LUAR BIASA MARGANINGSIH</b>');
$pdf->addText(190, 520, 12,'Jl. Raya Tajem, Kregen, Wedomartani, Ngemplak, Sleman, Yogyakarta Indonesia 55584');

//Garis atas untuk header
$pdf->line(31, 500, 800, 500);

//Garis bawah untuk footer
$pdf->line(31, 40, 800, 40);

//Teks kiri bawah
// $pdf->addText(100,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

// Baca input tanggal yang dikirimkan user
// $dari = date_format(date_create($_POST['awal']), 'Y-m-d');
// $sampai = date_format(date_create($_POST['akhir']), 'Y-m-d');
//echo "$mulai $selesai";exit;

//Menampilkan isi dari database
//Koneksi ke database dan tampilkan datanya
include 'koneksi.php';
// $angkatan=$_GET['angkatan'];
// $tampil = "SELECT id_ruang, id_kategori, id_inventaris, nama_inventaris, nama_kategori, nama_ruang, asal, tgl_pembelian, dibeli_oleh, nilai_pembelian, merk, nilai_saat_ini, kondisi, COUNT(nama_inventaris) AS jml, ket
// FROM tb_inventaris
// INNER JOIN tb_kategori USING (id_kategori)
// INNER JOIN tb_ruang USING (id_ruang) GROUP BY nama_inventaris";
//echo $tampil;exit;
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

if ($_GET['ruang']=='all') {

	$ruang = 'Semua Ruangan';

	$tampil = "SELECT *, SUM(nilai_pembelian) AS tot_harga, SUM(jumlah) AS tot_jumlah FROM tb_inventaris 
    LEFT JOIN tb_kategori ON tb_kategori.id_kategori=tb_inventaris.id_kategori 
    LEFT JOIN tb_ruang ON tb_ruang.id_ruang=tb_inventaris.id_ruang 
    WHERE tgl_pembelian >= '".$_GET['awal']."' AND tgl_pembelian <= '".$_GET['akhir']."' 
    GROUP BY tb_kategori.`id_kategori`";
}else{
	$get_ruang = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_ruang WHERE id_ruang='".$_GET['ruang']."'"));
	$ruang = $get_ruang['nama_ruang'];

	$tampil = "SELECT *, SUM(nilai_pembelian) AS tot_harga, SUM(jumlah) AS tot_jumlah FROM tb_inventaris 
    LEFT JOIN tb_kategori ON tb_kategori.id_kategori=tb_inventaris.id_kategori 
    LEFT JOIN tb_ruang ON tb_ruang.id_ruang=tb_inventaris.id_ruang 
    WHERE tgl_pembelian >= '".$_GET['awal']."' AND tgl_pembelian <= '".$_GET['akhir']."' AND tb_inventaris.id_ruang = '".$_GET['ruang']."' 
    GROUP BY tb_kategori.`id_kategori`";
}

$sql = mysqli_query($conn,$tampil);

//Menghitung jumlah data pada database				
$jml = mysqli_num_rows($sql);
//echo $jml;exit;
if ($jml > 0){

$i = 1;
$total=0;
$jumlah=0;
while($r = mysqli_fetch_array($sql)) {
$habis= date('Y-m-d', strtotime('+'.$r["penyusutan"].' month', strtotime( $r["tgl_pembelian"] )));
$pen = 1 / $r["penyusutan"] * 1 * $r["nilai_pembelian"];
$penyusutan=ceil($pen);
//Format Menampilkan data di ezPdf
	$data[$i]=array('No' => $i,
					'Jenis Barang'=>"$r[nama_kategori]",
				   	'Jumlah Total'=>"$r[tot_jumlah]",
				   	// 'Ruang'=>"$r[nama_ruang]",
				   	// 'Asal'=>"$r[asal]",
				   	// 'Tgl Beli'=>"$r[tgl_pembelian]",
				   	// 'Dibeli Oleh'=>"$r[dibeli_oleh]",
				   	// 'Merk'=>"$r[merk]",
				   	// 'Kondisi'=>"$r[kondisi]",
				   	// 'Keterangan'=>"$r[ket]",
				   	'Harga Total'=>number_format($r[tot_harga],0,'.','.'),
				   	// 'Penyusutan (bln)'=>"$penyusutan",
				   	// 'Habis'=>"$habis",
				);
	$i++;
	$total=$total+$r[tot_harga];
	$jumlah=$jumlah+$r[tot_jumlah];
}

$data[$i]=array('No' => '',
	'Jenis Barang'=>"Total",
   	'Jumlah Total'=>$jumlah,
   	// 'Ruang'=>"$r[nama_ruang]",
   	// 'Asal'=>"$r[asal]",
   	// 'Tgl Beli'=>"$r[tgl_pembelian]",
   	// 'Dibeli Oleh'=>"$r[dibeli_oleh]",
   	// 'Merk'=>"$r[merk]",
   	// 'Kondisi'=>"$r[kondisi]",
   	// 'Keterangan'=>"$r[ket]",
   	'Harga Total'=>number_format($total,0,'.','.'),
   	// 'Penyusutan (bln)'=>"$penyusutan",
   	// 'Habis'=>"$habis",
);

$data1 = array(
 array('num'=>1,'name'=>'gandalf','type'=>'wizard')
,array('num'=>2,'name'=>'bilbo','type'=>'hobbit','url'=>'http://www.ros.co.
nz/pdf/')
,array('num'=>3,'name'=>'frodo','type'=>'hobbit')
,array('num'=>4,'name'=>'saruman','type'=>'bad
dude','url'=>'http://sourceforge.net/projects/pdf-php')
,array('num'=>5,'name'=>'sauron','type'=>'really bad dude')
);

// Teks kiri bawah
$pdf->addText(29, 480, 16,$ruang);

//Tampilkan Dalam Bentuk Table
$pdf->ezText("\n\n\n");
$pdf->ezTable($data, null, '', array('width'=>'460', 'fontSize'=>'10', 'showLines'=>'1','showHeadings'=>'1',
		'cols'=>array(
			'Harga Total'=>array('justification'=>'right')
		)
	));

$option = array(
	'left' => 500,
	'right' => 0,
	'justification' =>'center'
);

$pdf->ezText("\n\n Yogyakarta, ".tgl_indo(date('Y-m-d')),'',$option);
$pdf->ezText(" Mengetahui, ",'',$option);
$pdf->ezText(" Kepada Sekolah ",'',$option);
$pdf->ezText("\n\n\n ( Dra. Tri Iriani ) ",'',$option);

// $pdf->ezTable($data1,array('type'=>'judul','name'=>'anu'),''
//  ,array('showHeadings'=>1,'shaded'=>1,'xPos'=>'right'
//  ,'xOrientation'=>'left','width'=>200,'showLines'=>1));
// $pdf->ezText("Total Bayar: $total");

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