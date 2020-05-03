<?php

require "dbh.inc.php";

if (isset($_POST['inregistrare'])) {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $modalitate_plata= $_POST['modalitate_plata'];
    $modalitate_livrare= $_POST['modalitate_livrare'];
    $judet = $_POST['judet'];
    $adresa = $_POST['adresa'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $produse = $_POST['produse'];
    $total = $_POST['total'];

$sql = "Insert into comanda(modalitate_Livrare,nume,prenume,judet,adresa,email,metode_Plata,produse_Comandate,nr_Telefon,total_plata)VALUES ( $modalitate_livrare,$nume,$prenume,$judet,$adresa,$email,$modalitate_plata,$produse,$telefon,$total);";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

