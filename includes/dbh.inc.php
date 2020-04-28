<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "shop";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Conexiune esuata: ".mysqli_connect_error());
}
else{
    echo "conexiune reusita";
}
