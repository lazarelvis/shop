

<body>
<div class="backAlb">
    <div class="navbar">
      <span class="navbar-toggle" id="js-navbar-toggle">
              <i class="fas fa-bars"></i>
          </span>
        <a href="https://mande.world" class="logo">M&E</a>
        <ul class="main-nav " id="js-menu">
            <li id="acasa" class="da">
                <a href="index.php" class="nav-links">Acasa</a>
            </li>
            <li id="produse" class="da">
                <a href="produse.php" class="nav-links">Produse</a>
            </li>
            <li id="oferte" class="da">
                <a href="oferte.php" class="nav-links">Oferte</a>
            </li>
            <?php
            if (isset($_SESSION['idUtilizator'])){ ?>
              <li id="oferte" class="da"><a href="oferte.php" class="nav-links"><?php echo $_SESSION['idUsername']?></a></li>
            <?php } else{ ?>
            <?php } ?>
            <li id="meniu" class="right nu"><input type="text" placeholder="     Cauta in magazin..."></li>
            <li class="nav-links"><a href="#" ><i class="fas fa-user button toggle-login"></i></a></li>
            <div class="login">
                <div class="triangle"></div><!-- .triangle -->
                <form action="include/login.inc.php" method="post">
                    <?php
                    if (isset($_SESSION['idUtilizator'])){ ?>
                        <div class="field-title">Nume:</div><!-- .field-title -->
                        <input class="nume" type="text" name="username" placeholder="Nume de utilizator" disabled style="background-color: white !important;"/>
                        <div class="field-title">Parola:</div><!-- .field-title -->
                        <input type="password" name="password" placeholder="**********" disabled/>
                    <?php } else{ ?>
                        <div class="field-title">Nume:</div><!-- .field-title -->
                        <input class="nume" type="text" name="username" placeholder="Nume de utilizator" />
                        <div class="field-title">Parola:</div><!-- .field-title -->
                        <input type="password" name="password" placeholder="**********" />
                    <?php } ?>
                    <?php
                    if (isset($_SESSION['idUtilizator'])){ ?>
                        <a href="include/logout.inc.php"><input class="logout" type="button" value="LogOut" /></a>
                    <?php } else{ ?>
                        <input type="submit" name="login" value="Login"/>
                        <a href="inregistrare.php"><input type="button" value="Register" style="background-color: white !important;"/></a>
                    <?php } ?>
                </form>
            </div>

            <li  class="nav-links"><div id="circleCos" class="circlePosition"  >
                    <h6 style=" position: absolute; color: white; left: 5px; font-weight: normal;">
                        <?php
                        $sql1 = "SELECT COUNT(id_produse) as produse FROM cos;";
                        $result = mysqli_query($conn,$sql1);
                        $resultCheck = mysqli_num_rows($result);
                        while ($row = mysqli_fetch_assoc($result)){
                            if ($row['produse'] != 0) {
                                echo $row['produse'];
                            }elseif ($row['produse']==0){
                                echo "<style> .circlePosition{display: none; }</style>";
                            }
                        }
                        ?>
                    </h6>
                </div><a href="cosCumparaturi.php"><i class="fas fa-shopping-basket"></i></a></li>
        </ul>
    </div>
</div>