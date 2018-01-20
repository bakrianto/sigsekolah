<?php include 'koneksi.php'; ?>
<?php 
    $jabatan = "kepala sekolah";
    $query = 'SELECT * FROM tb_organisasi WHERE jabatan="'.$jabatan.'"';
    $q = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($q)) { ?>

<ul id="org" style="display: none" class="text-center">
    <li class="text-center">Kepala Sekolah
            <hr style="padding: 0px; margin: 0px">
            <?php echo $data['nama']; ?><br>
            <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
            <!--img style="width: 70px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/-->                 

       <ul>
         <li>Bendahara
            <hr style="padding: 0px; margin: 0px">
            <?php echo $data['nama']; ?><br>
            <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
            <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
        </li>
         <li>Wakil Kepala
             <hr style="padding: 0px; margin: 0px">
             <?php echo $data['nama']; ?><br>
             <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
             <!-- <img style="width: 80px; height: auto" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> --> 
            <ul>
                <li>Kurikulum<br>
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>
                <li>Kepegawaian
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>                
                <li>Kesiswaan
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>                
                <li>Humas
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
                <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
                </li>                
            </ul>
         </li>
         <li>Tata Usaha
            <hr style="padding: 0px; margin: 0px">
            <?php echo $data['nama']; ?><br>
            <div style="padding-left: 7px;"><div style="background-image: url('<?="./images/anggota/".$data["pict"]?>');height: 105px;width: 105px;background-size: cover;background-position: center;"></div></div>
            <!-- <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/> -->
         </li>
       </ul>
     </li>
</ul>             
<div style="padding-left: 200px" id="chart" class="orgChart"></div>
<?php } ?>