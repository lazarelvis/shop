<?php require "include/produse.inc.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styleshop.css?v=<?php echo time(); ?>">
    <title>M&E | Shop </title>
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

<div class="container mt-5">
    <div class="containar2">
      <div class="row row-cols-1 row-cols-md-3">
        <?php
        foreach ($array as $item) {
            ?>
            <div class="col mb-4">
                <div class="card">
                    <div class="view overlay">
                        <img class="card-img-top mh-75" src="./upload/<?php echo  $item['imagine'];?>"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text pt-3"><?php echo $item["denumire"];?></p>
                        <p class="card-text"><?php echo $item["pret"];?> lei</p>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
      </div>
    </div>
</div>
</div>

    <script src="./js files/wrap.js"></script>
    <script src="./js files/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>