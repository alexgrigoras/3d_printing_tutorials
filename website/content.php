<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 12:37
 */

// se verifica daca se cere o pagina
if (isset($_GET["pagina"]))
{
    // daca se cere o pagina se verifica daca variabila nu este goala
    if(!empty($_GET["pagina"])) {
        $pagina = "content_pages/".$_GET["pagina"].".php";
    }
    // daca este goala se ia pagina principala
    else {
        $pagina = "content_pages/acasa.php";
    }
}
// daca nu se cere nici o pagina inseamna ca trebuie afisata pagina principala
else
{
    $pagina = "content_pages/acasa.php";
}

if (file_exists($pagina)) {
    include_once($pagina);
    echo "<button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\">Top</button>";
}
else {
    echo "<br>Eroare: Nu se gaseste fisierul ".$pagina." la server!";
}

?>

