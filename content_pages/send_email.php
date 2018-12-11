<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 03.01.2018
 * Time: 17:00
 */

if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "you@yourdomain.com";
    $email_subject = "Your email subject line";

    echo "<section class='first_container'>";

    function died($error) {
        echo "<h3>Se pare ca am gasit niste probleme!</h3>";
        echo "Ne pare rau, dar am gasit erori in formularul trimis! ";
        echo "Te rugam sa refaci formularul avand in vedere sugestiile de mai jos:<br /><br />";
        echo $error."<br /><br />";
    }

    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died("");
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_from = $_POST['email'];
    $telephone = $_POST['telephone'];
    $comments = $_POST['comments'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= ' - Adresa de email nu este valida<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$first_name)) {
        $error_message .= ' - Numele nu este valid<br />';
    }

    if(!preg_match($string_exp,$last_name)) {
        $error_message .= ' - Prenumele nu este valid<br />';
    }

    if(strlen($comments) < 2) {
        $error_message .= ' - Comentariul nu este valid. Trebuie introdus un text!<br />';
    }

    if(strlen($error_message) > 0) {
        echo "<p align=\"center\" valign=\"top\">" . died($error_message) . "</p>";
        ?>
        <p> Click <a href="./index.php?pagina=contact"> aici </a> pentru a reface formularul de contact!<br/> </p>

        <?php
    }
    else {
        $email_message = "Form details below.\n\n";

        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }

        $email_message .= "First Name: ".clean_string($first_name)."\n";
        $email_message .= "Last Name: ".clean_string($last_name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Telephone: ".clean_string($telephone)."\n";
        $email_message .= "Comments: ".clean_string($comments)."\n";

		// create email headers
        $headers = 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($email_to, $email_subject, $email_message, $headers);

        echo "<p>Thank you for contacting us. We will be in touch with you very soon!</p>";
    }

    echo "</section>";

}
?>


