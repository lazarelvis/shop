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
                              <p class="card-text pt-3"><?php echo $item["denumire"];?></p>
                              <p class="card-text"><?php echo $item["pret"];?> lei</p>
                              <form action="" method="POST">
                                  <?php if  (isset( $_SESSION['idUtilizator'])){?>
                                      <a class="btn btn-primary" href="include/cos.inc.php?id_prod=<?php echo $item['id_produse']; ?>">Adauga in cos</a>
                                  <?php }else{ ?>
                                      <input class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" type="button" value="Adauga in cos" style="background-color: #655AFF;">
                                  <?php } ?>
                                  <a class="btn btn-primary" href="vizualizareProd.php?id_prod=<?php echo $item['id_produse']?>">Vizualizeaza produs</a>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ooops se pare ca nu esti autentificat</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  ...
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              </div>
          </div>
      </div>
  </div>

<?php
require "footer.php";
?>
