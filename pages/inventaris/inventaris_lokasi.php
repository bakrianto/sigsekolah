<div class="row">
	<div class="container">
        <div class="text-center">
            <h1>Denah Ruangan SLB Marganingsih</h1>           
        </div>
    </div>
    <div class="container">
        <hr style="margin-top: 1px; "> 
    </div>

    <div class="container" style="margin-bottom: -80px">

    <?php 
        include "inventaris_denah.php";
    ?>
    </div>

    <!-- Detail Inventaris -->
    <div style="padding: 0 100px 0 100px;">
    <h1 class="text-center">Detail Inventaris</h1>
    <?php 
        include "koneksi.php";
        $id_ruang = $_GET['id_ruang'];
    ?>
    <?php 
        $q = mysqli_query($conn, "select * from tb_ruang where id_ruang=$id_ruang");
        while ($n = mysqli_fetch_assoc($q)) {
            echo "<div style='width: 200px; border-radius: 5px;' class='text-center bg-primary'><h3 style='padding: 2%;'><strong>".$n['nama_ruang']."</strong></h3></div>";
        }
    ?>
    <div class="scrollmenu">

    <table class="table table-bordered">
        <tr>
            <th>No. </th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    <?php 
    $no = 1;
    $q = mysqli_query($conn, "select *, COUNT(id_ruang) AS jml_brg from tb_inventaris left join tb_kategori on tb_kategori.id_kategori=tb_inventaris.id_kategori where id_ruang = $id_ruang GROUP BY tb_inventaris.id_kategori"); ?>

    <?php while ($data = mysqli_fetch_assoc($q)) {?>
        <tr>
        <td class="text-left"><?= $no++; ?></td>
        <td class="text-left"><?php echo $data['nama_kategori']; ?></td>
        <td class="text-left"><?php echo $data['jml_brg']; ?> Unit</td>
        <td><a class="btn btn-warning" href="?pg=inventaris_kategori&kategori=<?=$data[id_kategori]?>&ruang=<?=$data[id_ruang]?>" data-toggle="modal"><i class="fa fa-search-plus"></i> Detail</a></td>
        </tr>
    <?php }

    // echo "----".mysqli_info($con);
    ?>
    </table>
    </div>
    </div>
</div>