<?php
$id=htmlspecialchars(@$_GET['id']);
$query="SELECT id_alternatif,namaAlternatif FROM nama_alternatif WHERE id_alternatif='$id'";
$execute=$konek->query($query);
if ($execute->num_rows > 0){
    $data=$execute->fetch_array(MYSQLI_ASSOC);
}else{
    header('location:./?page=laptop');
}
?>
<div class="panel-top panel-top-edit">
    <b><i class="fa fa-pencil-alt"></i> Ubah data</b>
</div>
<form id="form" method="POST" action="./proses/prosesubah.php">
    <input type="hidden" name="op" value="laptop">
    <input type="hidden" name="id" value="<?php echo $data['id_alternatif']; ?>">
    <div class="panel-middle">
        <div class="group-input">
            <label for="laptop" >Nama Laptop :</label>
            <input type="text" value="<?php echo $data['namaAlternatif']; ?>" class="form-custom" required autocomplete="off" placeholder="Nama Laptop" id="laptop" name="laptop">
        </div>
    </div>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-pink"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    </div>
</form>
