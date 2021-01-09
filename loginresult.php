<?php session_start(); ?>

<div style="background-color: #eee;padding:25px;">
    <?php

    if (isset($_POST['submit'])) {

        // get value from form ... and save it into variable
        $mail     = $_POST['mail'];
        $password = $_POST['password'];

        // cleaning 
        $mail     = trim(htmlspecialchars($mail));
        $password = trim(htmlspecialchars($password));

        // validation 
        if (empty($mail)) {

            $mail_error = " you must enter your mail <br>";
        } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mail_error = " you must enter a valid mail <br>";
        }


        if (empty($password)) {
            $error_password =  " you must enter your password <br>";
        } else if (strlen($password) < 6) {
            $error_password =  " you must enter a valid password <br>";
        }

        if ( !isset($mail_error) && !isset($error_password)) {
            $_SESSION['mail'] = $mail;
            header('location: home.php');
        } else {
            if (isset($mail_error)) {
                $_SESSION['mail_error'] = $mail_error;
                echo $_SESSION['mail_error'];
            } 
            if (isset($error_password)) {
                $_SESSION['error_password'] = $error_password;
                echo $_SESSION['error_password'];
            }
            header('Location: login.php');
        }
    } else {
        header('location: login.php');
    }




    ?>
</div>