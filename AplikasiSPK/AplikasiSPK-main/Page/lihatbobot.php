<?php
$listWeight=array(
    array("nama"=>"0 - Sangat Rendah","nilai"=>0),
    array("nama"=>"0.25 - Rendah","nilai"=>0.25),
    array("nama"=>"0.5 - Tengah","nilai"=>0.5),
    array("nama"=>"0.75 - Tinggi","nilai"=>0.75),
    array("nama"=>"1 - Sangat Tinggi","nilai"=>1),
);
$id=htmlspecialchars(@$_GET['id']);
$querylihat="SELECT id_alternatif,bobot,id_bobotkriteria,kriteria.namaKriteria AS namaKriteria FROM bobot_kriteria INNER JOIN kriteria USING(id_kriteria) WHERE id_alternatif='$id'";
$execute2=$konek->query($querylihat);
if ($execute2->num_rows == 0){
    header('location:./?page=bobot');
}
?>
<!-- judul -->
<div class="panel-top">
    <b class="text-pink">Detail Bobot</b>
</div>
<form>
    <div class="panel-middle">
        <div class="group-input">
            <?php
            $query="SELECT namaAlternatif FROM nama_alternatif WHERE id_alternatif='$id'";
            $execute=$konek->query($query);
            $data=$execute->fetch_array(MYSQLI_ASSOC);
            ?>
            <div class="group-input">
                <label for="namalaptop">Nama Laptop</label>
                <input class="form-custom" value="<?php echo $data['namaAlternatif'];?>" disabled type="text" autocomplete="off" required name="namalaptop" id="namalaptop" placeholder="namalaptop">
            </div>
        </div>
        <?php
        $execute2=$konek->query($querylihat);
        while($data=$execute2->fetch_array(MYSQLI_ASSOC)){
            echo "<div class=\"group-input\">
                    <label for=\"$data[namaKriteria]\">$data[namaKriteria]</label>
                    <input type='hidden' value=\"$data[id_bobotkriteria]\" name=\"id[]\">
                    <select class=\"form-custom\" disabled required name=\"bobot[]\" id=\"$data[namaKriteria]\">";
                foreach ($listWeight as $key) {
                    if ($key['nilai']==$data['bobot']) {
                        $selected="selected";
                    }else{
                        $selected=null;
                    }
                    echo "<option $selected value=\"$key[nilai]\">$key[nama]</option>";
                }
            echo "</select>
            </div>
                ";
        }
        ?>
    </div>
    <div class="panel-bottom">
    </div>
</form>
