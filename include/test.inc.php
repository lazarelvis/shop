<?php
if (isset($_POST['adauga'])) {


        require 'dbh.inc.php';
        $id = $_GET['id_prod'];

        $sql = "INSERT INTO cos(id_produse) VALUES (?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../produse.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
        }
        header("Location: ../produse.php?adaugatCos=success");
        exit();

}