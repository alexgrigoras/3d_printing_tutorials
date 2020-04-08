<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 12:14
 */

// nivelul de raportare al erorilor din php
error_reporting(E_ALL);

// includere modul de head
if (file_exists("./head.php"))
{
    include_once("./head.php");
}
else
{
    die('<br>Eroare: Nu se gaseste fisierul head.php');
}

// includere modul de body
if (file_exists("./body.php"))
{
    include_once("./body.php");
}
else
{
    die('<br>Eroare: Nu se gaseste fisierul body.php');
}

// Se inchid tagurile html
echo ' ';
echo '</body>';
echo '</html>';



?>