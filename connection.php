<?php

$server = "localhost";
$user = "root";
$password = "";
$database_name = "sou_store_e-commerce";

$db = mysqli_connect("$server","$user","$password", "$database_name ");

if( !$db ) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
?>