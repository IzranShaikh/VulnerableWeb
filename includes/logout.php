<?php session_start();

    $_SESSION['session_username']  = null;
    $_SESSION['session_userrole'] = null;
    $_SESSION['session_email']  = null;
    $_SESSION['session_password'] = null;

    session_destroy();

    header("Location: ../login.php");

?>