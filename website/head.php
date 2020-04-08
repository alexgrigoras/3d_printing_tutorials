<!DOCTYPE html>

<head>

    <meta charset="UTF-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/3dp.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="js/script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    /**
     * Created by PhpStorm.
     * User: Alex-PC
     * Date: 27.12.2017
     * Time: 12:14
     */

    if(isset($_GET['pagina']))
    {
        $titlu = $_GET['pagina'];
    }
    else
    {
        $titlu = 'Pagina principala';
    }
    switch ($titlu)
    {
        case 'acasa':
            $titlu = 'Imprimarea 3D. Acasa';
            break;
        default:
            $titlu = 'Imprimarea 3D';
    }

    // titlul paginii
    echo '<title>'.$titlu.'</title>';

    ?>

</head>