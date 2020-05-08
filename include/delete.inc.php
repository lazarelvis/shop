<?php


if (isset($_GET['delete'])) {
    require 'dbh.inc.php';
    $id = $_GET['delete'];

    $sql = "DELETE FROM cos WHERE id_cos=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../cosCumparaturi.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        header("Location: ../cosCumparaturi.php?deletedProject=success");
        exit();
    }
    header("Location: ../cosCumparaturi.php?adaugatCos=error");
    exit();
}

