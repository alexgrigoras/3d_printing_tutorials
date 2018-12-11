<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 18:38
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

if(isset($_GET['upload'])) {
    ?>

    <section class="first_container">
        <?php
        if(!$login) {
            ?>
            <h2>Va rugam sa va logati pentru a avea acces la interpretorul G-Code!</h2>
            <?php
        }
        ?>
        <form action="utility_files/upload.php" method="post" enctype="multipart/form-data">
            Select another G-Code file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" <?php if(!$login) echo 'disabled' ?>>
            <input type="submit" value="Upload G-Code" name="submit" <?php if(!$login) echo 'disabled' ?>>
        </form>
    </section>


    <section class='view_container'>
    <?php
    switch ($_GET['upload']) {
        case "0":   echo "File " . $_GET['filename'] . " uploaded successfully!";
                    echo "<br/>The content is:";
                    break;
        case "1":   echo "File already exists on server!";
                    echo "<br/>The content is:";
                    break;
        case "2":   echo "Your file is too large to display! Select a smaller file!";
                    break;
        case "3":   echo "Only GCO, GCODE files are allowed!";
                    break;
        case "4":   echo "There was an error uploading your file!";
                    break;
    }

    echo "<br/><br/><br/><table>";

    if($_GET['upload'] == "0" || $_GET['upload'] == "1"){
        $myfile = fopen("./uploads/" . $_GET['filename'], "r") or die("Unable to open file!");
        /*echo "<br/><br/>";*/
        while(!feof($myfile)) {
            echo "<tr>";
            $line = fgets($myfile);
            $command = explode( " ", $line);

            $size = sizeof($command);
            if($size == "1") {
                $search =$line;
                $search = substr($search, 0, strlen($search)-1);
            }
            else {
                $search = $command[0];
            }

            echo "<td id='gcode'>" . $search . "</td> <td id='explanation'>";
            switch ($search) {
                case "G28":
                    if($size > 1){
                        echo "-> Auto home ";
                        for ($x = 1; $x < $size; $x++) {
                            echo $command[$x] . " ";
                        }
                        echo "axes";
                    }
                    else {
                        echo "-> Auto Home all axes";
                    }
                    break;
                case "G29":
                    if($size > 1){
                        echo "-> Unified Bed Leveling with arguments: ";
                        for ($x = 1; $x < $size; $x++) {
                            echo $command[$x] . " ";
                        }
                    }
                    else {
                        echo "-> Unified Bed Leveling";
                    }
                    break;
                case "G0":
                case "G1":
                    if($size > 1){
                        echo "-> Linear Movement: ";
                        for ($x = 1; $x < $size; $x++) {
                            switch ($command[$x][0]){
                                case "X":
                                    echo " - X axis to: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "Y":
                                    echo " - Y axis to: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "Z":
                                    echo " - Z axis to: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "E":
                                    echo " - Extrude: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "F":
                                    echo " - Feedrate: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                            }
                        }
                    }
                    else {
                        echo "-> Linear Movement wihout arguments does nothing!";
                    }
                    break;
                case "M107":
                    echo "-> Fan off";
                    break;
                case "G90":
                    echo "-> Absolute positioning";
                    break;
                case "M82":
                    echo "-> E Absolute";
                    break;
                case "M190":
                    echo "-> Wait for Bed Temperature";
                    break;
                case "M104":
                    if($size > 1){
                        echo "-> Set Hotend Temperature: ";
                        for ($x = 1; $x < $size; $x++) {
                            switch ($command[$x][0]){
                                case "B":
                                    echo " - Max auto-temperature.: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "F":
                                    echo " - Autotemp flag: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "S":
                                    echo " - Min auto-temperature: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                            }
                        }
                    }
                    else {
                        echo "-> Disable autotemp";
                    }
                    break;
                case "G92":
                    if($size > 1){
                        echo "-> Set Position: ";
                        for ($x = 1; $x < $size; $x++) {
                            switch ($command[$x][0]){
                                case "X":
                                    echo " - X axis to: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "Y":
                                    echo " - Y axis to: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "Z":
                                    echo " - Z axis to: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "E":
                                    echo " - Extrude: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                            }
                        }
                    }
                    else {
                        echo "-> Set Position wihout arguments does nothing!";
                    }
                    break;
                case "M109":
                    if($size > 1){
                        echo "-> Wait for Hotend Temperature: ";
                        for ($x = 1; $x < $size; $x++) {
                            switch ($command[$x][0]){
                                case "B":
                                    echo " - Max auto-temperature.: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "F":
                                    echo " - Autotemp flag: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "R":
                                    echo " -Target temperature (wait for cooling or heating): " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "S":
                                    echo " - Min auto-temperature: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                            }
                        }
                    }
                    else {
                        echo "-> Disable autotemp, wait for temp";
                    }
                    break;
                case "G91":
                    echo "-> Relative positioning";
                    break;
                case "M140":
                    if($size > 1){
                        echo "-> Set Bed Temperature: ";
                        for ($x = 1; $x < $size; $x++) {
                            switch ($command[$x][0]){
                                case "S":
                                    echo " - Min auto-temperature: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                            }
                        }
                    }
                    else {
                        echo "-> Disable autotemp";
                    }
                    break;
                case "M84":
                    if($size > 1){
                        echo "-> Disable steppers: ";
                        for ($x = 1; $x < $size; $x++) {
                            switch ($command[$x][0]){
                                case "X":
                                    echo " - X Disable ";
                                    break;
                                case "Y":
                                    echo " - Y Disable ";
                                    break;
                                case "Z":
                                    echo " - Z Disable ";
                                    break;
                                case "S":
                                    echo " - Inactivity Timeout: " . substr($command[$x], 1, strlen($command[$x]));
                                    break;
                                case "E":
                                    echo " - E Disable ";
                                    break;
                            }
                        }
                    }
                    else {
                        echo "-> Set Position wihout arguments does nothing!";
                    }
                    break;
                case "":
                    break;
                default:
                    echo "-> Unrecognized command!";
                    break;
            }

            echo "</td></tr>";
        }
        fclose($myfile);
    }
    echo "</table></section>";
}
else {
    ?>
    <section class="first_container">
        <?php
        if(!$login) {
            ?>
            <h2>Va rugam sa va logati pentru a avea acces la calculatoare!</h2>
            <?php
        }
        ?>
        <form action="utility_files/upload.php" method="post" enctype="multipart/form-data">
            Select G-Code file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" <?php if(!$login) echo 'disabled' ?>>
            <input type="submit" value="Upload G-Code" name="submit" <?php if(!$login) echo 'disabled' ?>>
        </form>
    </section>
    <?php
}
?>

<section class='break_container'>
    <br/><br/><br/><br/>
</section>





