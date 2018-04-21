<?php include 'koneksi.php'; ?>
<?php 
    // $jabatan = "kepala sekolah";
    $query = "SELECT * FROM `tb_organisasi` WHERE aktif='1' GROUP BY struktural";
    $q = mysqli_query($conn, $query);
    $no=1;
    while ($data = mysqli_fetch_array($q)) { 
        $str[$data['struktural']]=array(
            'struktural'=>$data['struktural'],
            'nama'=>$data['nama'],
            'gambar'=>"./images/anggota/".$data['pict']
        );
        $no++;
    }
    // print_r($str);
?>

<ul id="org" style="display: none" class="text-center">
    <li class="text-center">Kepala Sekolah
            <hr style="padding: 0px; margin: 0px">
            <div class="nama"><p><?php echo $str['Kepala Sekolah']['nama']; ?></p></div>
            
            <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Kepala Sekolah']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
            <!--img style="width: 70px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/-->                 

       <ul>
         <li>Bendahara
            <hr style="padding: 0px; margin: 0px">
            <div class="nama"><p><?php echo $str['Bendahara']['nama']; ?></p></div>
            <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Bendahara']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
            <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
        </li>
         <li>Wakil Kepala
             <hr style="padding: 0px; margin: 0px">
             <div class="nama"><p><?php echo $str['Wakil Kepala']['nama']; ?></p></div>
             <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Wakil Kepala']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
             <!-- <img style="width: 80px; height: auto" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> --> 
            <ul>
                <li>Kurikulum<br>
                <hr style="padding: 0px; margin: 0px">
                <div class="nama"><p><?php echo $str['Kurikulum']['nama']; ?></p></div>
                <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Kurikulum']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>
                <li>Kepegawaian
                <hr style="padding: 0px; margin: 0px">
                <div class="nama"><p><?php echo $str['Kepegawaian']['nama']; ?></p></div>
                <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Kepegawaian']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>                
                <li>Kesiswaan
                <hr style="padding: 0px; margin: 0px">
                <div class="nama"><p><?php echo $str['Kesiswaan']['nama']; ?></p></div>
                <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Kesiswaan']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>                
                <li>Humas
                <hr style="padding: 0px; margin: 0px">
                <div class="nama"><p><?php echo $str['Humas']['nama']; ?></p></div>
                <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Humas']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>                
            </ul>
         </li>
         <li>Tata Usaha
            <hr style="padding: 0px; margin: 0px">
            <div class="nama"><p><?php echo $str['Tata Usaha']['nama']; ?></p></div>
            <div style="padding-left: 7px;"><div style="background-image: url('<?=$str['Tata Usaha']['gambar']?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
            <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
         </li>
       </ul>
     </li>
</ul>             
<div style="padding-left: 200px" id="chart" class="orgChart"></div>
