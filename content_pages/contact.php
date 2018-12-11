<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 03.01.2018
 * Time: 16:58
 */

?>

<section class = first_container>

    <h2 align='center'>Formular de contact</h2>
    <br/>

    <article class = "form_container">
        <form name="contactform" method="post" action="./index.php?pagina=send_email">
            <br/>
            <label for="first_name">First Name: <span style="color:red">*</span></label><br/>
            <input  type="text" name="first_name" maxlength="50" size="30">
            <br/><br/>
            <label for="last_name">Last Name: <span style="color:red">*</span></label><br/>
            <input  type="text" name="last_name" maxlength="50" size="30">
            <br/><br/>
            <label for="email">Email Address: <span style="color:red">*</span></label><br/>
            <input  type="text" name="email" maxlength="80" size="30">
            <br/><br/>
            <label for="telephone">Telephone Number:</label><br/>
            <input  type="text" name="telephone" maxlength="30" size="30">
            <br/><br/>
            <label for="comments">Comments: <span style="color:red">*</span></label><br/>
            <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
            <br/><br/>
            <input type="submit" value="Submit">
            <br/><br/>
        </form>
    </article>

</section>