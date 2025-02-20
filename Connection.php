<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "kampusku";
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$link){
    die ("Koneksi dengan database gagal: ".mysqli_connect_error());
}
?>