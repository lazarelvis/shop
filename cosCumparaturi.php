<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styleCosCumparaturi.css">

    <title>M&E | Shop</title>
</head>
<body>
    <!-- nav -->
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
<!-- ./nav -->

<!-- cos cumparaturi -->
<div class="containerCos"> 
    <h1>Cos de cumparaturi</h1>

    <div class="shopping-cart">

    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
    </div>

    <div class="product">
        <div class="product-image">
        <img src="./img/img11.jpg">
        </div>
        <div class="product-details">
        <div class="product-title">Dingo Dog Bones</div>
        <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
        </div>
        <div class="product-price">12.99</div>
        <div class="product-quantity">
        <input type="number" value="2" min="1">
        </div>
        <div class="product-removal">
        <button class="remove-product">
            Remove
        </button>
        </div>
        <div class="product-line-price">25.98</div>
    </div>

    <div class="product">
        <div class="product-image">
        <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
        </div>
        <div class="product-details">
        <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
        <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
        </div>
        <div class="product-price">45.99</div>
        <div class="product-quantity">
        <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
        <button class="remove-product">
            Remove
        </button>
        </div>
        <div class="product-line-price">45.99</div>
    </div>

    <div class="totals">
        <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">71.97</div>
        </div>
        <div class="totals-item">
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">3.60</div>
        </div>
        <div class="totals-item">
        <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00</div>
        </div>
        <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total">90.57</div>
        </div>
    </div>
        
        <button class="checkout">Checkout</button>

    </div>
</div>
<!-- ./cos cumparaturi -->
</body>
<script src="./js files/wrap.js"></script>
<script src="./js files/cantitate.js"></script>
<script src="./js files/login.js"></script>
</html>

