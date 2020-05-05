<?php
session_start();
if (isset($_POST['cos'])) {
    require 'dbh.inc.php';
    $id = $_GET['id_prod'];
    $marime = $_POST['marime'];
    $id_user = $_SESSION['idUtilizator'];

    $sql = "INSERT INTO cos(id_produse,id_utilizator,marime) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../produse.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "iis", $id,$id_user,$marime);
        mysqli_stmt_execute($stmt);
    }
    header("Location: ../produse.php?adaugatCos=success".$id);
    exit();
}

