<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 03.01.2018
 * Time: 19:59
 */
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
?>

<section class = "first_container">

    <h2>Enter Username and Password</h2>

    <div class = "form_container">

        <form class = "form-signin" role = "form" action = "./index.php?pagina=login_check" method = "post">

            <?php
            if( isset($_SESSION['valid']) &&  $_SESSION['valid'] == false) {
                ?>
                <h4 class="form-signin-heading"><?php echo $_SESSION['message']; ?></h4>
                <?php
            }
            ?>

            <br/>
            <input type = "text" class = "form-control"
                   name = "username" placeholder = "username = alex"
                   required autofocus>
            </br></br>
            <input type = "password" class = "form-control"
                   name = "password" placeholder = "password = 1234" required>
            </br></br><br/>

            <button type = "submit" name = "login" id = "login_button">Login</button>
            <br/><br/>

        </form>

    </div>

</section>