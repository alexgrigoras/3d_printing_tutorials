<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 29.12.2017
 * Time: 11:29
 */
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET["testID"]))
{
    $testName = "TEST " . $_GET["testID"];
    // daca se cere o pagina se verifica daca variabila nu este goala
    if(!empty($_GET["pagina"])) {
        $pagina = "content_pages/test".$_GET["testID"].".php";
    }
    // daca este goala se ia pagina principala
    else {
        $pagina = "content_pages/acasa.php";
    }
}

if( isset($_SESSION['valid']) &&  $_SESSION['valid'] == true) {
    $login = true;
}
else {
    $login = false;
}

?>

<section class="first_container">
    <h2 align="center">
        <?php
        if(!empty($testName)) {
            echo $testName;
        }
        else {
            echo "Test unknown";
        }
        ?>
    </h2>

    <?php
        if(!$login) {
        ?>
        <h2>Va rugam sa va logati pentru a avea acces la tot testul!</h2>
        <br/>
        <?php
    }
    ?>
    <br/>
    <form action="./index.php?pagina=grade&testID=<?php if (isset($_GET["testID"])) echo $_GET["testID"]?>" method="post" id="quiz">
        <?php
        if (file_exists($pagina)) {
            include_once($pagina);
        }
        else {
            echo "<br>Eroare: Nu se gaseste fisierul ".$pagina." la server!";
        }
        ?>
        <div align="center">
            <input type="image" src="./images/submit.png" alt="Submit" id="submit_button" <?php if(!$login) echo 'disabled'; ?>>
        </div>
        <br /><br />
    </form>
</section>

<br/><br/>
<section class='break_container'>
    <br/><br/><br/><br/>
</section>
