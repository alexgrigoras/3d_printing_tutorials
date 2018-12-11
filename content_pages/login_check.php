<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 03.01.2018
 * Time: 21:39
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    if ($_POST['username'] == 'alex' && $_POST['password'] == '1234') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'alex';
        $_SESSION['message'] = 'Welcome, ' . $_POST['username'] . '!';

        header('Location: ./index.php?pagina=acasa');
    }
    else if ($_POST['username'] == 'test' && $_POST['password'] == 'abcd') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'alex';
        $_SESSION['message'] = 'Welcome, ' . $_POST['username'] . '!';

        header('Location: ./index.php?pagina=acasa');
    }
    else {
        $_SESSION['valid'] = false;
        $_SESSION['message'] = 'Wrong username or password';

        header('Location: ./index.php?pagina=login');
    }

}

?>