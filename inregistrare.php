<?php
require "navbar.php";
?>
  	<div class="container mt-5">
  	<div class="row justify-content-center pb-5"> 
    <div class="col-md-6 order-md-1">
      <h1 class="mb-3 text-center">Inregistrează-te</h1>
      <form class="needs-validation" novalidate="">
      	<div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nume:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Popescu" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Prenume:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Ion" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Nume de utilizator:</label>
            <input type="text" class="form-control" id="firstName" placeholder="popescu123" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="address">Email:</label>
          <input type="text" class="form-control" id="address" placeholder="you@example.com" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Parola:</label>
          <input type="text" class="form-control" id="address" placeholder="123456" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Confirmati prola:</label>
          <input type="text" class="form-control" id="address2" placeholder="123456">
        </div>


        <hr class="mb-4">
        <button class="btn btn-lg btn-block" type="submit">Inregistrare</button>
      </form>
    </div>
    </div>
    </div>
<?php
require "footer.php";
?>