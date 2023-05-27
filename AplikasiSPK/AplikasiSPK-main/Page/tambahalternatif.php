<div class="panel-top">
    <b class="text-pink"><i class="fa fa-plus-circle text-yellow"></i> Tambah data</b>
</div>
<form id="form" method="POST" action="./proses/prosestambah.php">
    <input type="hidden" name="op" value="laptop">
    <div class="panel-middle">
        <div class="group-input">
            <label for="laptop" >Nama Laptop :</label>
            <input type="text" class="form-custom" required autocomplete="off" placeholder="Nama Laptop" id="laptop" name="laptop">
        />/>
    <div class="panel-bottom">
        <button type="submit" id="buttonsimpan" class="btn btn-pink"><i class="fa fa-save"></i> Simpan</button>
        <button type="reset" id="buttonreset" class="btn btn-second">Reset</button>
    />/>
