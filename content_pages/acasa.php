<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 15:01
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

<section class="home_container">

    <div id="home_title_large">IMPRIMAREA 3D</div>
    <br/>
    <div id="home_title_small">SFATURI SI TRUCURI</div>

    <?php
    if( isset($_SESSION['valid']) &&  $_SESSION['valid'] == true) {
        ?>
        <br/><br/>
        <div id="home_title_smaller"><?php echo $_SESSION['message']; ?></div>
        <?php
    }
    ?>

</section>

<section class="info_container">

    <article class="icon_container">
        <img src="images/text.png" alt="Text Icon" width="150px">
        <p id="icon_text">INFORMAȚII</p>
    </article>

    <article class="icon_container">
        <img src="images/video.png" alt="Video Icon" width="150px">
        <p id="icon_text">VIDEO</p>
    </article>

    <article class="icon_container">
        <img src="images/test.png" alt="Test Icon" width="150px">
        <p id="icon_text">TESTE</p>
    </article>

</section>

<section class="text_container">

    <p id="text_1">TUTORIALE DESPRE IMPRIMAREA 3D</p>
    <?php
    if(!$login) {
        ?>
        <a href="./index.php?pagina=login" id="text_2">Să începem, nu-i așa?</a>
        <?php
    }
    else {
        ?>
        <a href="./index.php?pagina=3dprinting" id="text_2">Să începem, nu-i așa?</a>
        <?php
    }
    ?>

</section>

<section class="steps_container">
    <p id="steps_title">PASI PENTRU CONSTRUIREA UNEI IMPRIMANTE 3D</p>

    <div class="step_wrapper">
        <article class="step_info">
            <img src="images/learn.png" alt="Learn Icon" width="40%">
            <p id="icon_text">Documentare</p>
        </article>
        <br/>
        <article class="step_info_explain">
            &nbsp;&nbsp;&nbsp;- Tehnologii<br/>
            &nbsp;&nbsp;&nbsp;- Tipuri de imprimante<br/>
            &nbsp;&nbsp;&nbsp;- Cum functioneaza?<br/>
            &nbsp;&nbsp;&nbsp;- Cum se configureaza?
        </article>
    </div>

    <div class="step_wrapper">
        <article class="step_info">
            <img src="images/build.png" alt="Build Icon" width="40%">
            <p id="icon_text">Construire</p>
        </article>
        <br/>
        <article class="step_info_explain">
            &nbsp;&nbsp;&nbsp;- Alegerea tipului imprimantei<br/>
            &nbsp;&nbsp;&nbsp;- Achizitionarea pieselor<br/>
            &nbsp;&nbsp;&nbsp;- Asamblarea lor<br/>
            &nbsp;&nbsp;&nbsp;- Testarea fiabilitatii
        </article>
    </div>

    <div class="step_wrapper">
        <article class="step_info">
            <img src="images/configure.png" alt="Configure Icon" width="40%">
            <p id="icon_text">Configurare</p>
        </article>
        <br/>
        <article class="step_info_explain">
            &nbsp;&nbsp;&nbsp;- Alegerea firmware-ului<br/>
            &nbsp;&nbsp;&nbsp;- Configurarea lui<br/>
            &nbsp;&nbsp;&nbsp;- Testarea firmware-ului<br/>
            &nbsp;&nbsp;&nbsp;- Reglaje fine
        </article>
    </div>

</section>

