<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
?>

<div>
    <h2>Contents of Included File</h2><hr>
    <?php
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            include"includes/$page";
        }
    ?>
</div>

<?php
    include"includes/footer.php";
?>