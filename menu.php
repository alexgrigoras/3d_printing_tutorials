<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 12:40
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if( isset($_SESSION['valid']) &&  $_SESSION['valid'] == true) {
    $login = true;
}
else {
    $login = false;
}

?>

<nav>
    <div id="logo">
        <img src="images/3dp.png" alt="Menu Icon" height = "30px" width="30px" id="3dpicon">
        IMPRIMAREA 3D
    </div>

    <label for="drop" class="toggle">
        <img src="images/menu_icon.png" alt="Menu Icon" height = "25px" width="25px" id="menuicon">
    </label>
    <input type="checkbox" id="drop" />
    <ul class="menu">
        <?php
            $ok = isset($_GET["pagina"]);
        ?>
        <li><a href="./index.php?pagina=acasa" <?php if(($ok && ($_GET["pagina"] == "acasa")) || !$ok) echo "class='active'" ?> >Acasa</a></li>
        <li>
            <!-- First Tier Drop Down -->
            <label for="drop-1" class="toggle" >Tutoriale +</label>
            <a href="#" <?php if($ok && ($_GET["pagina"] == "3dprinting" || $_GET["pagina"] == "3dbuilding" || $_GET["pagina"] == "gcodefiles")) echo "class='active'" ?> >Tutoriale</a>
            <input type="checkbox" id="drop-1"/>
            <ul>
                <li><a href="./index.php?pagina=3dprinting" <?php if($ok && ($_GET["pagina"] == "3dprinting")) echo "class='active'" ?> >Imprimarea 3D</a></li>
                <li><a href="./index.php?pagina=3dbuilding" <?php if($ok && ($_GET["pagina"] == "3dbuilding")) echo "class='active'" ?> >Construirea unei imprimante</a></li>
                <li><a href="./index.php?pagina=gcodefiles" <?php if($ok && ($_GET["pagina"] == "gcodefiles")) echo "class='active'" ?> >Fisiere G-Code</a></li>
            </ul>

        </li>
        <li>
            <!-- First Tier Drop Down -->
            <label for="drop-2" class="toggle">Teste +</label>
            <a href="#"
                <?php if($ok && ($_GET["pagina"] == "test1" || $_GET["pagina"] == "test"|| $_GET["pagina"] == "grade1" || $_GET["pagina"] == "grade2" || $_GET["pagina"] == "grade3")) echo "class='active'" ?>
            >Teste</a>
            <input type="checkbox" id="drop-2"/>
            <ul>
                <li><a href="./index.php?pagina=test&testID=1" <?php if($ok && ($_GET["pagina"] == "test" && $_GET["testID"] == "1")) echo "class='active'" ?> >Test 1</a></li>
                <li><a href="./index.php?pagina=test&testID=2" <?php if($ok && ($_GET["pagina"] == "test" && $_GET["testID"] == "2")) echo "class='active'" ?> >Test 2</a></li>
                <li><a href="./index.php?pagina=test&testID=3" <?php if($ok && ($_GET["pagina"] == "test" && $_GET["testID"] == "3")) echo "class='active'" ?> >Test 3</a></li>
            </ul>

        </li>
        <li>
            <!-- First Tier Drop Down -->
            <label for="drop-3" class="toggle">Instrumente +</label>
            <a href="#" <?php if($ok && ($_GET["pagina"] == "gcodeparser" || $_GET["pagina"] == "calculators")) echo "class='active'" ?> >Instrumente</a>
            <input type="checkbox" id="drop-3"/>
            <ul>
                <li><a href="./index.php?pagina=gcodeparser" <?php if($ok && ($_GET["pagina"] == "gcodeparser")) echo "class='active'" ?> >Interpretor</a></li>
                <li><a href="./index.php?pagina=calculators" <?php if($ok && ($_GET["pagina"] == "calculators")) echo "class='active'" ?> >Calculatoare</a></li>
                <li><a href="./index.php?pagina=gcodehint" <?php if($ok && ($_GET["pagina"] == "gcodehint")) echo "class='active'" ?> >G-CODE</a></li>
            </ul>

        </li>
        <li><a href="./index.php?pagina=contact" <?php if($ok && ($_GET["pagina"] == "contact")) echo "class='active'" ?> >Contact</a></li>
        <?php
        if( $login ) {
            ?>
            <li><a href="./index.php?pagina=logout" <?php if($ok && ($_GET["pagina"] == "logout")) echo "class='active'" ?> >Logout</a></li><?php
        }
        else {
            ?>
            <li><a href="./index.php?pagina=login" <?php if($ok && ($_GET["pagina"] == "login")) echo "class='active'" ?> >Login</a></li>
        <?php
        }
        ?>
    </ul>
</nav>

