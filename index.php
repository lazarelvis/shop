<?php
require "include/dbh.inc.php";
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
<body>
    <div class="navbar">
		<span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="https://mande.world" class="logo">M&E</a>
        <ul class="main-nav " id="js-menu">
            <li id="acasa" class="da">
                <a href="index.html" class="nav-links">Acasa</a>
            </li>
            <li id="produse" class="da">
                <a href="produse.html" class="nav-links">Produse</a>
            </li>
            <li id="oferte" class="da">
                <a href="oferte.html" class="nav-links">Oferte</a>
            </li>
            <li id="meniu" class="right nu"><input type="text" placeholder="     Cauta in magazin..."></li>
              <li class="nav-links"><a href="#" ><i class="fas fa-user button toggle-login"></i></a></li>
              <div class="login">
                <div class="triangle"></div><!-- .triangle -->
                <form>
                  <div class="field-title">Nume:</div><!-- .field-title -->
                  <input type="email" placeholder="Nume de utilizator" />
                  <div class="field-title">Parola:</div><!-- .field-title -->
                  <input type="password" placeholder="**********" />
                  <input type="submit" value="Login" />
                  <a href="inregistrare.html"><input type="button" value="Register" /></a>
                </form>
              </div>
            <li  class="nav-links"><a href="cosCumparaturi.html"><i class="fas fa-shopping-basket"></i></a></li>
        </ul>
      </div>

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
