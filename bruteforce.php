<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
?>

<center><h2>All Forms in this Website are Vulnerable to BruteForce/Word Attacks</h2></center>

<?php
    include"includes/footer.php";
?>