<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styleInregistrare.css?v=<?php echo time(); ?>">
    <title>M&E | Shop</title>
</head>
<?php
require "navbar.php";
?>
  	<div class="container mt-5">
  	<div class="row justify-content-center pb-5"> 
    <div class="col-md-6 order-md-1">
      <h1 class="mb-3 text-center">Inregistrează-te</h1>
      <form class="needs-validation" novalidate="" action="include/inregistrare.inc.php" method="post">
      	<div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nume:</label>
            <input type="text" class="form-control" name="nume" id="firstName" placeholder="Popescu" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Prenume:</label>
            <input type="text" class="form-control" name="prenume" id="lastName" placeholder="Ion" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Nume de utilizator:</label>
            <input type="text" class="form-control" name="username" id="firstName" placeholder="popescu123" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Email:</label>
          <input type="text" class="form-control" name="email" id="address" placeholder="you@example.com" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Parola:</label>
          <input type="password" class="form-control" name="password" id="address" placeholder="123456" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Confirmati prola:</label>
          <input type="password" class="form-control" name="password-conf" id="address2" placeholder="123456">
        </div>


        <hr class="mb-4">
        <button class="btn btn-lg btn-block" type="submit" name="inregistrare">Inregistrare</button>
      </form>
    </div>
    </div>
    </div>
<?php
require "footer.php";
?>