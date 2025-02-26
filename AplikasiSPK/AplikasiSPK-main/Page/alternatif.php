<!-- judul -->
<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="asset/image/alternatif.svg">
        <div id="judul-text">
            <h2 class="text-pink">ALTERNATIF</h2>
            Halamanan Administrator Alternatif
        </div>
    </div>
</div>
<!-- judul -->
<div class="row">
    <div class="col-4">
        <div class="panel">
            <?php
            if (@htmlspecialchars($_GET['aksi'])=='ubah'){
                include 'ubahalternatif.php';
            }else{
                include 'tambahalternatif.php';
            }
            ?>
        </div>
    </div>
    <div class="col-8">
        <div class="panel">
            <div class="panel-top">
                <b class="text-pink">Daftar Alternatif</b>
            </div>
            <div class="panel-middle">
                <div class="table-responsive">
                    <table>
                        <thead><tr><th>No</th><th>Nama</th><th>Aksi</th></tr></thead>
                        <tbody>
                        <?php
                        $query="SELECT * FROM nama_alternatif";
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
                                    <a class=\"btn btn-light-blue\" href='./?page=alternatif&aksi=ubah&id=".$data['id_alternatif']."'><i class='fa fa-pencil-alt'></i></a>
                                    <a class=\"btn btn-red\" data-a=".$data['namaAlternatif']." id='hapus' href='./proses/proseshapus.php/?op=alternatif&id=".$data['id_alternatifg']."'><i class='fa fa-trash-alt'></i></a></td>
                                </div></tr>";
                                $no++;
                            }
                        }else{
                            echo "<tr><td  class='text-center text-pink' colspan='3'>Kosong</td></tr>";
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
