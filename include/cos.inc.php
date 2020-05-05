<?php
session_start();
if (isset($_GET['id_prod'])) {
    require 'dbh.inc.php';
    $id = $_GET['id_prod'];
    $id_user = $_SESSION['idUtilizator'];

    $sql = "INSERT INTO cos(id_produse,id_utilizator) VALUES (?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../produse.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ii", $id,$id_user);
        mysqli_stmt_execute($stmt);
    }
    header("Location: ../produse.php?adaugatCos=success");
    exit();
}

