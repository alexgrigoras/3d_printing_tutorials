<body>

<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 12:20
 */

// includere meniu orizontal
if (file_exists("./menu.php"))
{
    include("./menu.php");
}
else
{
    die('EROARE: Nu exista fisierul menu.php');
}

// includere continut
if (file_exists("./content.php"))
{
    include("./content.php");
}
else
{
    die('EROARE: Nu exista fisierul continut.php');
}

// includere subsol
if (file_exists("./footer.php"))
{
    include("./footer.php");
}
else
{
    die('EROARE: Nu exista fisierul footer.php');
}

?>

</body>
