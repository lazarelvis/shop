<?php

if (isset($_POST['inregistrare'])) {
    require 'dbh.inc.php';

    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-conf'];

    if (empty($nume) ||empty($prenume) ||empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../inregistrare.php?error=emptyfields");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../inregistrare.php?error=invalidmail&user");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../inregistrare.php?error=invalidmail" . $username);
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../inregistrare.php?error=invalidmail" . $email);
        exit();
    } elseif ($password !== $passwordRepeat) {
        header("Location: ../inregistrare.php?error=invalidpassword");
        exit();
    } else {
        $sql = "SELECT username FROM utilizatori WHERE username=? ;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../inregistrare.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../inregistrare.php?error=usertaken&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO utilizatori (nume, prenume, username, email, parola) values (?, ?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../inregistrare.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssss", $nume, $prenume, $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../inregistrare.php?inregistrare=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
    header("Location: ../inregistrare.php");
    exit();
}