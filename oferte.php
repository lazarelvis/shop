<?php require "include/produseSpeciale.inc.php"; ?>
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/styleoferte.css?v=<?php echo time(); ?>">

    <title>M&E | Oferte</title>


</head>
  <?php
  require "navbar.php";
  ?>
<!--    CONTENT-->
          <div class="container pt-5">
            <div class="row"> 
                <div class="col-md-8 col-sm-12 col-xs-12 primary-big-banner">
                    <img class="img-fluid mt-3" src="./img/row1col2.png">
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 primary-small-banner">
                            <img class="img-fluid mt-3" src="./img/row1col2.png">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 primary-small-banner">
                            <img class="img-fluid mt-3" src="./img/row1col2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
  <div class="container mt-5 pb-5">
    <div class="containar2">  
        <div class="row row-cols-1 row-cols-md-4">
            <?php
            foreach ($array as $item) {
            ?>
            <div class="col mb-4">
                  <div class="card">
                    <div class="view overlay">
                      <img class="card-img-top"src="./upload/<?php echo  $item['imagine'];?>"
                        alt="Card image cap">
                        <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <div class="card-body text-center">
                      <p class="card-text pt-3"><?php echo $item["denumire"];?></p>
                      <p class="card-text"><?php echo $item["pret"];?> lei</p>
                        <form action="" method="POST">
                            <a class="btn btn-primary" href="vizualizareProd.php?id_prod="><i class="far fa-eye" style="color: white; font-size: 16px;padding-right: 10px;"></i>Vizualizeaza produs</a>
                        </form>
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

<!-- Footer -->
<footer class="page-footer font-small blue pt-5 mt-5" style="background-color: #655AFF; color: white;">
  <div class="container-fluid text-center text-md-left" >
    <div class="row pb-3">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">DESIGNERI</h5>
        <p class="pt-3" style="font-size: 18px;">Mihiță  &emsp; Nr de telefon 0712345678 &emsp;<i class="fab fa-facebook-square" style="font-size: 26px;"></i>&ensp;
          <i class="fab fa-instagram" style="font-size: 26px;"></i>&ensp;
          <i class="fab fa-twitter" style="font-size: 26px;"></i></p>
        <p style="font-size: 18px;">Elvis  &emsp;&nbsp;&nbsp;&nbsp; Nr de telefon 0712345678 &emsp;<i class="fab fa-facebook-square" style="font-size: 26px;"></i>&ensp;
          <i class="fab fa-instagram" style="font-size: 26px;"></i>&ensp;
          <i class="fab fa-twitter" style="font-size: 26px;"></i></p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase pb-2">&ensp;&nbsp;Acasa</h5>
        <h5 class="text-uppercase pb-2">Produse</h5>
        <h5 class="px-1 text-uppercase pb-2">&nbsp;Oferte</h5>
        <h5 class="px-2 text-uppercase pb-2">&nbsp;&nbsp;Cont</h5>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-center">Sediu Str Folorilor nr. 25<br/>
          800025</h5>
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->

    <script src="./js files/login.js"></script>
    <script src="./js files/wrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>