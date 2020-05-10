<?php
session_start();

if (isset($_POST['checkout'])) {
    require "dbh.inc.php";
    $sql1 = "SELECT SUM(pret) as pret FROM cos,produse WHERE cos.id_produse=produse.id_produse";
    $result = mysqli_query($conn,$sql1);
    $resultCheck = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)){
        if (!is_null($row['pret'])) {
            $total= $row['pret']+15+(5/100*$row['pret']);
            echo $total;
        }else{
            echo "0";
        }
    }
    $sql2 = "SELECT * FROM cos,produse WHERE cos.id_produse=produse.id_produse;";
    $result1 = mysqli_query($conn, $sql2);
    $resultCheck = mysqli_num_rows($result1);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result1)) {
            $produse.=$row['denumire']." ( ".$row['marime']." ) ";
        }
    }
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $modalitate_plata = $_POST['customRadio1'];
    $modalitate_livrare = $_POST['customRadio'];
    $judet = $_POST['judet'];
    $adresa = $_POST['adresa'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $sql = "  Insert into comanda(modalitate_Livrare,nume,prenume,judet,adresa,email,metoda_Plata,produse_Comandate,nr_Telefon,total_plata)VALUES ('$modalitate_livrare','$nume','$prenume','$judet','$adresa','$email','$modalitate_plata','$produse','$telefon','$total');
";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../addFiles.php?error=sqlerror");
        exit();
    }
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $id_user = $_SESSION['idUtilizator'];
    $sql3 = "DELETE FROM cos WHERE id_utilizator=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql3)) {
        header("Location: ../checkout.php?error=sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $id_user);
    mysqli_stmt_execute($stmt);

    $_SESSION['message'] = "Comanda efectuata cu success";
    $_SESSION['msg_type'] = "success";

    header("Location: ../index.php?comanda=success");
    exit();

} else {
    header("Location: ../index.php?eroare");
    exit();
}