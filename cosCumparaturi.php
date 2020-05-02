<?php require "include/cosProduse.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styleCosCumparaturi.css?v=<?php echo time(); ?>">

    <title>M&E | Shop</title>
</head>
<?php
require "navbar.php";
?>

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
        <?php
        foreach ($array as $item) {
        ?>
    <div class="product">
        <div class="product-image">
        <img src="./img/img11.jpg">
        </div>
        <div class="product-details">
        <div class="product-title"><?php echo $item["denumire"];?></div>
        <p class="product-description"><?php echo $item["caracteristici"];?></p>
        </div>
        <div class="product-price"><?php echo $item["pret"];?> </div>
        <div class="product-quantity">
        <input type="number" value="1" min="1">
        </div>
        <div class="product-removal">
        <button class="remove-product">
            Remove
        </button>
        </div>
        <div class="product-line-price"><?php echo $item["pret"];?> </div>
    </div>
<?php } ?>

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

        <a href="checkout.php"><button class="checkout">Checkout</button></a>

    </div>
</div>
<!-- ./cos cumparaturi -->
</body>
<script src="./js files/wrap.js"></script>
<script src="./js files/cantitate.js"></script>
<script src="./js files/login.js"></script>
</html>

