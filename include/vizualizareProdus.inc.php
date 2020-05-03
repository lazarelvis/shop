<?php
if (isset($_GET['id_prod'])) {
    require "dbh.inc.php";

    $id_prod = $_GET['id_prod'];

    $array = array();
    $sql = "SELECT * FROM produse WHERE id_produse=" . $id_prod;
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }

    }
}