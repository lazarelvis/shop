<?php
require "include/dbh.inc.php";
?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css?v=<?php echo time(); ?>">
    <title>M&E | Shop</title>
</head>
<?php
require "navbar.php";
?>

    <div class="container1">
        <div class="row">
        <div class="column1">
            <h1>CUMPARA-L.</h1>
            <p>Cumpara cel mai fresh merch
            doar cu un click.</p>
            <form>
                <button class="button1">Apasa aici</button>
            </form>
        </div>
        <div class="column2">
            <img src="./img/img1.png"/>
        </div>
        </div>
    </div>
    <div class="telefon">
        <div class="coloana">
            <img src="./img/Telefon.png">
        </div>
        <div class="coloana">
        <div class="coloana2" >
            <p>Fa parte din noua echipa M&E</p>
            <form action="produse.html">
                <button type="submit" class="button1">Apasa aici</button>
            </form>
        </div>
    </div>
    </div>
</body>
<script src="./js files/wrap.js"></script>
<script src="./js files/login.js"></script>
</html>
