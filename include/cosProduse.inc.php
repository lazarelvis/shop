<?php
require "dbh.inc.php";
session_start();
if (isset( $_SESSION['idUtilizator'])) {
    $id_user = $_SESSION['idUtilizator'];
    $array = array();
    $sql = "SELECT * FROM descriere ,cos,produse WHERE  produse.caracteristici=descriere.id_descriere and cos.id_produse=produse.id_produse AND id_utilizator=". $id_user;
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    }
}else{

}