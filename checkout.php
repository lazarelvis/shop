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
    <form>
        <div class="shadow  mb-5 bg-white rounded radiosection">
            <div class="radiosection p-4">
                <div id="circle">
                    <h5>1</h5>
                </div>
                <h3 class="ml-5" >Modalitate de livrare:</h3>
                <div class="custom-control  ml-4 pt-2 custom-radio radio1">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label " for="customRadio1">Easy BOX</label>
                </div>
                <div class="custom-control ml-4 pt-2 custom-radio radio2">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">FAN Courier</label>
                </div>
            </div>
        </div>
        <!-- CASUTELE DE TEXT -->
        <div class="shadow  mb-5 bg-white rounded radiosection">
            <div class="radiosection p-4">
                <div id="circle"><h5>2</h5></div><h3 class="ml-5">Date personale:</h3>
                <form class="datep">
                    <div class="form-row pb-3 pt-3">
                        <div class="col pl-2 pr-3">
                            <input type="text" class="form-control" placeholder="Nume">
                        </div>
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" placeholder="Prenume">
                        </div>
                    </div>
                    <div class="form-row pb-3 pt-3">
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" placeholder="Tara,Judet">
                        </div>
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" placeholder="Adresa">
                        </div>
                    </div>
                    <div class="form-row pb-3 pt-3">
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col  pl-2 pr-3">
                            <input type="text" class="form-control" placeholder="Numar telefon">
                        </div>
                    </div>
                </form>
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
                    <input type="radio" id="customRadio1-1" name="customRadio1" class="custom-control-input">
                    <label class="custom-control-label " for="customRadio1-1">Transfer prin internet banking</label>
                </div>
                <div class="custom-control ml-4 pt-2 custom-radio radio4">
                    <input type="radio" id="customRadio1-2" name="customRadio1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1-2">Ramburs la curier</label>
                </div>
            </div>
        </div>
        <!-- TEXTUL -->
        <div class="produse">
            <p class="h5">10X tricou M&E model vara (Marimea S) : 550 lei </p>
            <p class="h5">15X tricou M&E model toamna (Marimea S) : 650 lei </p>
            <p class="h5">20X tricou M&E model iarna (Marimea S) :  750 lei</p>
        </div>
        <!-- BUTONUL SI TOTALUL -->
        <div class="pt-2" >
            <p class="h4 d-inline">TOTAL COMANDA : 1.950.000 lei </p>
            <button class="btn btn-primary d-inline float-right mb-5" type="submit"><h4>Trimite comanda</h4></button>
        </div>
    </form>
</div>
<?php
require "footer.php";
?>