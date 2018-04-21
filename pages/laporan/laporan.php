<?php
include_once("koneksi.php");
?>
<?php if ($_SESSION['username']=='admin') { ?>
<div class="row">
    <div class="col-md-12">
        <div class="pull-left">
            <h1>Laporan</h1>
        </div>
        <div class="pull-right">
            <p id="realtgl" class="datetime"></p>
            <p id="realwaktu" class="datetime"></p>
        </div>
    </div>
</div>
<hr style="margin-top: 0px; ">
<div class="row">
    <div class="col-md-12">
        <!-- <form action="?pg=transaksi_tambah" method="post">     -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row" align="center">
                        <form class="form-inline" action="?pg=laporan" method="post">
                            
                            <!-- <div class="form-group">                              
                                <div class="input-group mg-bot">
                                    <div class="input-group-addon">Jenis</div>
                                    <select name="tipe_laporan" class="form-control">
                                        <option value="ruang">Laporan Detail</option>
                                        <option value="all">Laporan Global</option>
                                    </select>
                                </div>
                            </div>
                            - -->
                            <div class="form-group">
                                
                                <div class="input-group mg-bot">
                                    <div class="input-group-addon">Ruang</div>
                                    <!-- <input type="date" class="form-control" name="awal"> -->
                                    <select class="form-control" name="ruang">
                                        <?php 
                                            $r = mysqli_query($conn, "SELECT * FROM tb_ruang ORDER BY id_ruang ASC");
                                            echo '<option value="all">Semua Ruang</option>';
                                            while ($rng = mysqli_fetch_assoc($r)) {
                                                echo '<option value="'.$rng['id_ruang'].'">'.$rng['nama_ruang'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            -
                            <div class="form-group">
                                
                                <div class="input-group mg-bot">
                                    <div class="input-group-addon">Tgl Awal</div>
                                    <input type="date" class="form-control" name="awal">
                                </div>
                            </div>
                            -
                            <div class="form-group">
                                
                                <div class="input-group mg-bot">
                                    <div class="input-group-addon">Tgl Akhir</div>
                                    <input type="date" class="form-control" name="akhir">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Lihat</button>
                        </form>
                    </div>
                </div>
                <?php 
                    if ($_POST): 
                        if ($_POST['ruang']=='all') {
                            $query = mysqli_query($conn, "SELECT * FROM tb_inventaris 
                            LEFT JOIN tb_kategori ON tb_kategori.id_kategori=tb_inventaris.id_kategori 
                            LEFT JOIN tb_ruang ON tb_ruang.id_ruang=tb_inventaris.id_ruang 
                            WHERE tgl_pembelian >= '".$_POST['awal']."' AND tgl_pembelian <= '".$_POST['akhir']."'");
                        }else{
                            $query = mysqli_query($conn, "SELECT * FROM tb_inventaris 
                            LEFT JOIN tb_kategori ON tb_kategori.id_kategori=tb_inventaris.id_kategori 
                            LEFT JOIN tb_ruang ON tb_ruang.id_ruang=tb_inventaris.id_ruang 
                            WHERE tgl_pembelian >= '".$_POST['awal']."' AND tgl_pembelian <= '".$_POST['akhir']."' AND tb_inventaris.id_ruang = '".$_POST['ruang']."'");
                        }
                    
                ?>
                    <div class="panel-body">
                        laporan : <?=$_POST['awal'] ?> s/d <?=$_POST['akhir'] ?>
                        <span class="pull-right">
                            <a href="rekap_laporan.php?awal=<?=$_POST[awal] ?>&akhir=<?=$_POST[akhir] ?>&ruang=<?=$_POST[ruang] ?>" target="blank" class="btn btn-info">Print Detail</a>&nbsp;
                            <a href="rekap_laporan_global.php?awal=<?=$_POST[awal] ?>&akhir=<?=$_POST[akhir] ?>&ruang=<?=$_POST[ruang] ?>" target="blank" class="btn btn-info">Print Global</a>
                        </span>
                        
                        <hr>
                        <table class="table table-bordered table-responsive table-striped data">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Kategori Barang</th>
                                <th>Kode Barang</th>
                                <th>Asal</th>
                                <th>Tanggal</th>
                                <th>Umur</th>
                                <th>Harga total</th>
                                <th>Kondisi</th>
                                <th>Keterangan</th>
                                <th>Penyusutan (Bulan)</th>
                                <th>Habis</th>
                              </tr>
                            </thead> 
                            <tbody>
                            <?php
                            while ($data=mysqli_fetch_assoc($query)){ 
                            $i++;
                            $habis= date('Y-m-d', strtotime('+'.$data["penyusutan"].' month', strtotime( $data["tgl_pembelian"] )));
                            $pen = 1 / $data["penyusutan"] * $data["jumlah"] * $data["nilai_pembelian"];
                            ?>
                              <tr>
                                <td><?=$i?></td>
                                <td><?=$data["nama_kategori"]?></td>
                                <td><?=$data["kd_barang"]?></td>
                                <td><?=$data["asal"]?></td>
                                <td><?=$data["tgl_pembelian"]?></td>
                                <td><?=$data["penyusutan"]?> Bulan</td>
                                <td>Rp. <?=$data["nilai_pembelian"]?></td>
                                <td><?=$data["kondisi"]?></td>
                                <td><?=$data['ket'];?></td>
                                <td>Rp. <?=ceil($pen)  ?></td>
                                <td><?= $habis ?></td>
                              </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>    
                <?php endif ?>
                
            </div>
        <!-- </form> -->
    </div>
</div>
<?php } ?>