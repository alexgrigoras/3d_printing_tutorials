<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 07.01.2018
 * Time: 13:17
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

<section class="first_container">

    <h2>Tastati o comanda G-Code pentru a afla mai multe informatii:</h2>

    <?php
    if(!$login) {
        ?>
        <h2>Va rugam sa va logati pentru a avea acces la interpretorul G-Code!</h2>
        <?php
    }
    ?>

    <form action="">
        Comanda: <input type="text" id="txt1" onkeyup="showHint(this.value)" <?php if(!$login) echo 'disabled' ?>>
    </form>

    <p>Informatii:
        <ul><span id="txtHint"></span></ul>
    </p>

</section>

<br/>
<section class='break_container'>
    <br/><br/><br/>
</section>
