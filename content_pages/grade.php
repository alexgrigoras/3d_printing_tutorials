<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 22:22
 */
?>

<div >
    <br />
    <br />

    <div class="first_container">

        <?php

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $totalCorrect = 0;
        $ok = 1;

        if (isset($_GET["testID"])) {
            $test = $_GET["testID"];
        }

        if($test == "1") {
            if ($answer1 == "B") {$totalCorrect++;}
            if ($answer2 == "D") {$totalCorrect++;}
            if ($answer3 == "C") {$totalCorrect++;}
            if ($answer4 == "B") {$totalCorrect++;}
            if ($answer5 == "D") {$totalCorrect++;}
        }
        else if($test == "2") {
            if ($answer1 == "C") {$totalCorrect++;}
            if ($answer2 == "D") {$totalCorrect++;}
            if ($answer3 == "C") {$totalCorrect++;}
            if ($answer4 == "A") {$totalCorrect++;}
            if ($answer5 == "D") {$totalCorrect++;}
        }
        else if($test == "3") {
            if ($answer1 == "B") {$totalCorrect++;}
            if ($answer2 == "C") {$totalCorrect++;}
            if ($answer3 == "D") {$totalCorrect++;}
            if ($answer4 == "D") {$totalCorrect++;}
            if ($answer5 == "A") {$totalCorrect++;}
        }
        else {
            $ok = 0;
        }

        if($ok == 1) {

            echo "<h2 align='center'>Rezultatul final al testului mumarul $test</h2>";

            echo "<div align='center'>
                    <h3>
                        Ati raspuns corect la: <br />
                        $totalCorrect intrebari din totalul de 5!
                    </h3>		
                </div>";

        }
        else {
            echo "Invalid grade!";
        }
        ?>

        <br />
        <p align="center" valign="top">Click
            <a href="./index.php?pagina=test&testID=<?php echo $test?>"> aici </a>
            pentru a reface Testul <?php echo $test?><br/>
        </p>

    </div>

</div>
