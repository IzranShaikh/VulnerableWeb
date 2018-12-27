<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
if(!isset($_SESSION['session_username']))
{
    header("Location: login.php");
}
?>
Welcome to VWA
<?php include"includes/footer.php"; ?>