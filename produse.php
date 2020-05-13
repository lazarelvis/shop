<?php require "include/produse.inc.php"; ?>
<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/styleshop.css?v=<?php echo time(); ?>">
    <title>M&E | Shop </title>
  </head>
  <?php if (isset($_SESSION['message'])): ?>
      <div class="alert alert-<?=$_SESSION['msg_type']?> w-25 position-absolute" style="right: 0; z-index: 200;">
          <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
          ?>
      </div>
  <?php endif ?>

      <?php
      require "navbar.php";
      ?>

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
                              <p class="card-text pt-3 font-weight-bold" style="font-size: 22px;color: #4F4F4F;"><?php echo $item["denumire"];?></p>
                              <p class="card-text" style="font-size: 14px"><?php echo strtoupper($item["categorie"]);?></p>
                              <hr>
                              <p class="card-text pb-2 font-weight-bold" style="font-size: 22px;color: #4F4F4F;"><?php echo $item["pret"];?> lei</p>
                              <form action="" method="POST">
                                  <a class="btn btn-primary" href="vizualizareProd.php?id_prod=<?php echo $item['id_produse']?>"><i class="far fa-eye" style="color: white; font-size: 16px;padding-right: 10px;"></i>Vizualizeaza produs</a>
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

<?php
require "footer.php";
?>
