
<!-- judul -->
<div class="panel-top">
    <b class="text-pink"><i class="fa fa-plus-circle text-pink"></i> Tambah data</b>
</div>
<form id="form" action="./proses/prosestambah.php" method="POST">
    <input type="hidden" value="bobot" name="op">
    <div class="panel-middle">
        <div class="group-input">
            <label for="laptop">Nama Laptop</label>
            <select class="form-custom" required name="laptop" id="laptop">
                <option selected disabled>--Pilih Nama Laptop--</option>
                <?php
                $query="SELECT * FROM nama_alternatif";
                $execute=$konek->query($query);
                if ($execute->num_rows > 0){
                    while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                        echo "<option value=\"$data[id_alternatif]\">$data[namaAlternatif]</option>";
                    }
                }else {
                    echo "<option value=\"\">Belum ada Nama Laptop</option>";
                }
                ?>
            </select>
        </div>
        <?php
$listWeight=array(
    array("nama"=>"0 - Sangat Rendah","nilai"=>0),
    array("nama"=>"0.25 - Rendah","nilai"=>0.25),
    array("nama"=>"0.5 - Tengah","nilai"=>0.5),
    array("nama"=>"0.75 - Tinggi","nilai"=>0.75),
    array("nama"=>"1 - Sangat Tinggi","nilai"=>1),
);
        $query="SELECT * FROM kriteria";
        $execute=$konek->query($query);
        if ($execute->num_rows > 0){
            while($data=$execute->fetch_array(MYSQLI_ASSOC)){
                echo "<div class=\"group-input\">
                        <label for=\"$data[namaKriteria]\">$data[namaKriteria]</label>
                        <input type='hidden' value=$data[id_kriteria] name='kriteria[]'>
                            <select class=\"form-custom\" required name=\"bobot[]\" id=\"$data[namaKriteria]\">
                            <option selected disabled>--Pilih Bobot $data[namaKriteria]--</option>";
                            foreach ($listWeight as $key) {
                                echo "<option value=\"$key[nilai]\">$key[nama]</option>";
                            }
                echo "      </select>
                      </div>
                ";
            }
        }
        ?>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-pink"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>
