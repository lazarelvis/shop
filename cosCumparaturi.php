<?php require "include/cosProduse.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4e72c71dc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
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
        <label class="product-price">Pret</label>
        <label class="product-quantity">Cantitate</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
    </div>
        <?php if (isset($_SESSION['idUtilizator'])){ ?>

        <?php
        foreach ($array as $item) {
        ?>
    <div class="product">
        <div class="product-image">
        <img src="./upload/<?php echo  $item['imagine'];?>">
        </div>
        <div class="product-details">
        <div class="product-title">
         <h3><?php echo $item["denumire"];?> ( Marimea <?php echo $item["marime"];?>)</h3> </div>
        <p class="product-description">Culoare: <?php echo $item["culoare"];?></p>
        <p class="product-description">Material: <?php echo $item["material"];?></p>
        <p class="product-description">Stil: <?php echo $item["stil"];?></p>

        </div>
        <div class="product-price"><?php echo $item["pret"];?> </div>
        <div class="product-quantity">
        <input type="number" value="1" min="1" disabled style="background-color: white">
        </div>
        <div class="product-removal">
            <a href="include/delete.inc.php?delete=<?php echo $item['id_cos']?>">
                <button class="remove-product">Sterge</button></a>
        </div>
        <div class="product-line-price"><?php echo $item["pret"];?> </div>
    </div>
<?php } ?>

    <div class="totals">
        <div class="totals-item">
        <label>Subtotal</label>
        <div class="totals-value" id="cart-subtotal">
            <?php
            $sql1 = "SELECT SUM(pret) as pret FROM cos,produse WHERE cos.id_produse=produse.id_produse";
            $result = mysqli_query($conn,$sql1);
            $resultCheck = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)){
                if (!is_null($row['pret'])) {
                    echo $row['pret'];
                }else{
                    echo "0";
                }
            }
            ?>
        </div>
        </div>
        <div class="totals-item">
        <label>Tax (5%)</label>
        <div class="totals-value" id="cart-tax">
            <?php
            $sql1 = "SELECT SUM(pret) as pret FROM cos,produse WHERE cos.id_produse=produse.id_produse";
            $result = mysqli_query($conn,$sql1);
            $resultCheck = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)){
                if (!is_null($row['pret'])) {
                    echo(5/100*$row['pret']);
                }else{
                    echo "0";
                }
            }
            ?>
        </div>
        </div>
        <div class="totals-item">
        <label>Shipping</label>
        <div class="totals-value" id="cart-shipping">15.00 </div>
        </div>
        <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total">
            <?php
            $sql1 = "SELECT SUM(pret) as pret FROM cos,produse WHERE cos.id_produse=produse.id_produse";
            $result = mysqli_query($conn,$sql1);
            $resultCheck = mysqli_num_rows($result);

            while ($row = mysqli_fetch_assoc($result)){
                if (!is_null($row['pret'])) {
                    echo $row['pret']+15+(5/100*$row['pret']);
                }else{
                    echo "0";
                }
            }
            ?>
        </div>
        </div>
    </div>

        <a href="checkout.php"><button class="checkout">Checkout</button></a>

    </div>
</div>
<?php }else{ ?>

    <h1>Trebuie sa te autentifici</h1>
<?php } ?>
<!-- ./cos cumparaturi -->
</body>
<script src="./js files/wrap.js"></script>
<script src="./js files/cantitate.js"></script>
<script src="./js files/login.js"></script>
</html>

