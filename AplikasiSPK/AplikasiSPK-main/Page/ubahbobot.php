<?php
$id=htmlspecialchars(@$_GET['id']);
$querylihat="SELECT id_alternatif,bobot,id_bobotkriteria,kriteria.namaKriteria AS namaKriteria FROM bobot_kriteria INNER JOIN kriteria USING(id_kriteria) WHERE id_alternatif='$id'";
$execute2=$konek->query($querylihat);
if ($execute2->num_rows == 0){
    header('location:./?page=bobot');
}
?>
<!-- judul -->
<div class="panel-top panel-top-edit">
    <b><i class="fa fa-pencil-alt"></i> Ubah data</b>
</div>
<form id="form" action="./proses/prosesubah.php" method="POST">
    <input type="hidden" value="bobot" name="op">
    <div class="panel-middle">
        <div class="group-input">
            <div class="group-input">
                <?php
                $query="SELECT namaAlternatif FROM nama_alternatif WHERE id_alternatif='$id'";
                $execute=$konek->query($query);
                $data=$execute->fetch_array(MYSQLI_ASSOC);
                ?>
                <div class="group-input">
                    <label for="namalaptop">Nama Laptop</label>
                    <input class="form-custom" value="<?php echo $data['namaAlternatif'];?>" disabled type="text" autocomplete="off" required name="laptop" id="laptop">
                </div>
            </div>
        </div>
        <?php
        $execute2=$konek->query($querylihat);
        while($data=$execute2->fetch_array(MYSQLI_ASSOC)){
            echo "<div class=\"group-input\">
                     <label for=\"$data[namaKriteria]\">$data[namaKriteria]</label>
                     <input type='hidden' value=\"$data[id_bobotkriteria]\" name=\"id[]\">
                     <input class=\"form-custom\" value=\"$data[bobot]\" type=\"text\" autocomplete=\"off\" required name=\"bobot[]\" id=\"$data[namaKriteria]\" placeholder=\"Nilai $data[namaKriteria]\">
                   </div>
                ";
        }
        ?>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-pink"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>
