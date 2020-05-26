

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
            <li id="meniu" class="right nu"><input type="text" placeholder="     Cauta in magazin...">
                <button type="submit" name="header_search_submit" class="button-reset color-inherit db o-60 absolute center-v right-1 hover-primary6" >
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-fw">
                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class="">
                        </path>
                    </svg>
                </button>
            </li>
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
            <li  class="nav-links">
                <?php
                if (isset($_SESSION['idUtilizator'])) {
                ?>
                <div id="circleCos" class="circlePosition"  >
                    <h6 style=" position: absolute; color: white; left: 5px; font-weight: normal;">
                        <?php
                            $sql1 = "SELECT COUNT(id_produse) as produse FROM cos where id_utilizator=".$_SESSION['idUtilizator'];
                            $result = mysqli_query($conn, $sql1);
                            $resultCheck = mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['produse'] != 0) {
                                    echo $row['produse'];
                                } elseif ($row['produse'] == 0) {
                                    echo "<style> .circlePosition{display: none; }</style>";
                                }
                        }
                        ?>
                    </h6>
                </div>
                <?php } ?>
                <a href="cosCumparaturi.php"><i class="fas fa-shopping-basket"></i></a></li>
        </ul>
    </div>
</div>