<?php include 'koneksi.php'; ?>
<?php 
    $jabatan = "kepala sekolah";
    $query = 'SELECT * FROM tb_organisasi WHERE jabatan="'.$jabatan.'"';
    $q = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($q)) { ?>

<ul id="org" style="display: none" class="text-center">
    <li>Kepala Sekolah
            <hr style="padding: 0px; margin: 0px">
            <?php echo $data['nama']; ?><br>
            <img style="width: 70px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>                 

       <ul>
         <li>Bendahara
            <hr style="padding: 0px; margin: 0px">
            <?php echo $data['nama']; ?><br>
            <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>
        </li>
         <li><p>Wakil Kepala</p>
             <div style="border: 1px solid black; border-radius: 10px">
                 
             </div>
            <ul>
                <li>Kurikulum<br>
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>
                </li>
                <li>Kepegawaian
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>
                </li>                
                <li>Kesiswaan
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>
                </li>                
                <li>Humas
                <hr style="padding: 0px; margin: 0px">
                <?php echo $data['nama']; ?><br>
                <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>
                </li>                
            </ul>
         </li>
         <li>Tata Usaha
            <hr style="padding: 0px; margin: 0px">
            <?php echo $data['nama']; ?><br>
            <img style="width: 80px" src="<?php echo './images/anggota/'.$data['pict']; ?>"/>
         </li>
       </ul>
     </li>
</ul>             
<div style="padding-left: 200px" id="chart" class="orgChart"></div>
<?php } ?>