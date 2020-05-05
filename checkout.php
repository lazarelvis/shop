
<?php require "include/cosProduse.inc.php"; ?>

<?php
include "include/dbh.inc.php";
if (isset($_SESSION['idUtilizator'])) {
    $array = array();
    $sql = "SELECT * FROM utilizatori WHERE id_utilizator=" . $_SESSION['idUtilizator'];
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    }

}

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
    <link rel="stylesheet" type="text/css" media="screen" href="css/styleoferte.css?v=<?php echo time(); ?>">
    <title>M&E | Checkout</title>

    <style>
        .radiosection{
            background-color:#F6F5FF;
        } #circle {
              width: 31px;
              height: 31px;
              -webkit-border-radius: 25px;
              -moz-border-radius: 25px;
              border-radius: 25px;
              background: #655AFF;
              position: absolute;
          }
        .shadow h5{
            position: absolute;
            color: white;
            left: 11px;
            top: 2px;
        }
        label{
            font-size: 1.5rem;
        }
        .custom-control-label::before{
            border: 3px solid #655AFF;
            margin-top: 5px;
            width: 1.1rem;
            height: 1.1rem;
            border-radius: 50px;
        }
        .custom-control-label::after{
            top: .61rem;
            left: -1.43rem;

        }
        .datep input{
            border-radius: 15px;
            border: 2px solid #655AFF;
            height: 50px;
        }
        .btn-primary{
            border-radius: 15px;
            border: 2px solid #655AFF;
            height: 50px;
            background-color: #655AFF;
        }
        .btn-primary:hover{
            border: 2px solid #473FBB;
            background-color:#473FBB;
        }
        .btn-primary h4 {
            color: white;
        }
    </style>
</head>
<body>
<!--Nevbar-->
<?php
require "navbar.php";
?>
<!-- RADIO BUTON -->
<div class="container mt-5">
    <form  novalidate="" action="include/checkout.inc.php" method="post">
        <div class="shadow  mb-5 bg-white rounded radiosection">
            <div class="radiosection p-4">
                <div id="circle">
                    <h5>1</h5>
                </div>
                <h3 class="ml-5" >Modalitate de livrare:</h3>
                <div class="custom-control  ml-4 pt-2 custom-radio radio1">
                    <input type="radio" id="customRadio1" name="customRadio" value="Easy_Box" class="custom-control-input">
                    <label class="custom-control-label " for="customRadio1">Easy BOX</label>
                </div>
                <div class="custom-control ml-4 pt-2 custom-radio radio2">
                    <input type="radio" id="customRadio2" name="customRadio" value="Fan_Courier" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">FAN Courier</label>
                </div>
            </div>
        </div>
        <!-- CASUTELE DE TEXT -->
        <div class="shadow  mb-5 bg-white rounded radiosection">
            <div class="radiosection p-4">
                <div id="circle"><h5>2</h5></div><h3 class="ml-5">Date personale:</h3>
                <div class="datep">
                    <div class="form-row pb-3 pt-3">
                        <div class="col pl-2 pr-3">
                            <?php
                            if (isset($_SESSION['idUtilizator'])){ ?>
                            <input type="text" class="form-control" name="nume" placeholder="Nume" value="<?php echo $_SESSION['nume']?>">
                            <?php }else{ ?>
                            <input type="text" class="form-control" name="nume" placeholder="Nume">
                            <?php } ?>

                        </div>
                        <div class="col  pl-2 pr-3">
                            <?php
                            if (isset($_SESSION['idUtilizator'])){ ?>
                            <input type="text" class="form-control" name="prenume" placeholder="Prenume" value="<?php echo $_SESSION['prenume']?>">
                            <?php }else{ ?>
                            <input type="text" class="form-control" name="prenume" placeholder="Prenume">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-row pb-3 pt-3">
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" name="judet" placeholder="Tara,Judet">
                        </div>
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" name="adresa" placeholder="Adresa">
                        </div>
                    </div>
                    <div class="form-row pb-3 pt-3">
                        <div class="col  pl-2 pr-3">
                        <?php
                        if (isset($_SESSION['idUtilizator'])){ ?>
                            <input type="text" class="form-control"  name="email" placeholder="Email" value="<?php echo $_SESSION['email']?>">
                        <?php }else{ ?>
                            <input type="text" class="form-control"  name="email" placeholder="Email">
                        <?php } ?>
                        </div>
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" name="telefon" placeholder="Numar telefon">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- metoda de plata -->
        <div class="shadow  mb-5 bg-white rounded radiosection">
            <div class="radiosection p-4">
                <div id="circle">
                    <h5>3</h5>
                </div>
                <h3 class="ml-5" >Metoda de plata:</h3>
                <div class="custom-control  ml-4 pt-2 custom-radio radio3">
                    <input type="radio" id="customRadio1-1" name="customRadio1" value="Internet_Banking" class="custom-control-input">
                    <label class="custom-control-label " for="customRadio1-1">Transfer prin internet banking</label>
                </div>
                <div class="custom-control ml-4 pt-2 custom-radio radio4">
                    <input type="radio" id="customRadio1-2" name="customRadio1" value="Ramburs" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1-2">Ramburs la curier</label>
                </div>
            </div>
        </div>
        <!-- TEXTUL -->


<?php
foreach ($array as $item) {
    ?>
    <div class="produse">
        <p class="h5"><?php echo $item["denumire"]; ?> <?php echo $item["caracteristici"]; ?>
            : <?php echo $item["pret"]; ?> LEI</p>
    </div>
    <?php
}
?>
        <!-- BUTONUL SI TOTALUL -->
        <div class="pt-2">
            <p class="h4 d-inline">TOTAL COMANDA : <?php
                $sql1 = "SELECT SUM(pret) as pret FROM cos,produse WHERE cos.id_produse=produse.id_produse";
                $result = mysqli_query($conn, $sql1);
                $resultCheck = mysqli_num_rows($result);

                while ($row = mysqli_fetch_assoc($result)) {
                    if (!is_null($row['pret'])) {
                        $a = $row['pret'] + 15 + (5 / 100 * $row['pret']);
                        echo $a;
                    } else {
                        echo "0";
                    }
                }
                ?> LEI</p>
            <button class="btn btn-primary d-inline float-right mb-5" name="checkout" type="submit" ><h4>Trimite comanda</h4></button>
        </div>
    </form>
</div>
<?php
require "footer.php";
?>