<?php
require "dbh.inc.php";
$array = array();
$sql = "SELECT * FROM produse_speciale; ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
}