<?php
require './connect.php';
?>
<!-- judul -->
<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="asset/image/bobot.svg">
        <div id="judul-text">
            <h2 class="text-pink">BOBOT</h2>
            Halamanan Administrator Bobot Kriteria
        </div>
    </div>
</div>
<!-- judul -->
<div class="row">
    <div class="col-4">
        <div class="panel">
            <?php
            if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                include 'ubahbobot2.php';
            }elseif (@htmlspecialchars($_GET['aksi'])=='lihat'){
                include 'lihatbobot.php';
            }else{
                include 'tambahbobot2.php';
            }
            ?>
        </div>
    </div>
    <div class="col-8">
        <div class="panel">
            <div class="panel-top">
                <b class="text-pink">Daftar Bobot</b>
            </div>
            <div class="panel-middle">
                <div class="table-responsive">
                    <table>
                        <thead><tr><th>No</th><th>Nama Laptop</th><th>Aksi</th></tr></thead>
                        <tbody>
                        <?php
                        $query="SELECT bobot_kriteria.id_alternatif AS idalternatifbobot,nama_alternatif.namaAlternatif AS namaAlternatif FROM bobot_kriteria INNER JOIN nama_alternatif WHERE bobot_kriteria.id_alternatif=nama_alternatif.id_alternatif GROUP BY idalternatifbobot ORDER BY idalternatifbobot ASC";
                        $execute=$konek->query($query);
                        if ($execute->num_rows > 0){
                            $no=1;
                            while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                                echo"
                                <tr id='data'>
                                    <td>$no</td>
                                    <td>$data[namaAlternatif]</td>
                                    <td>
                                    <div class='norebuttom'>
                                    <a class=\"btn btn-pink\" href='./?page=bobot&aksi=lihat&id=".$data['idalternatifbobot']."'><i class='fa fa-eye'></i></a>
                                    <a class=\"btn btn-light-blue\" href='./?page=bobot&aksi=ubah&id=".$data['idalternatifbobot']."'><i class='fa fa-pencil-alt'></i></a>
                                    <a class=\"btn btn-red\" data-a=".$data['namaAlternatif']." id='hapus' href='./proses/proseshapus.php/?op=bobot&id=".$data['idalternatifbobot']."'><i class='fa fa-trash-alt'></i></a></td>
                                </div></tr>";
                                $no++;
                            }
                        }else{
                            echo "<tr><td  class='text-center text-pink' colspan='4'><b>Kosong</b></td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel-bottom"></div>
        </div>
    </div>
</div>
