<?php
$konek=new mysqli('localhost','root','','projectspk');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>