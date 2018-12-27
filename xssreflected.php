<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
?>

<div class="container">
    <label for="name">Enter Your Name</label><br><br>
    <form action="xssreflected.php" method="get">
        <input type="text" class="form-control" name="reflected_xss_infected_input"><br>
        <input type="submit" class="btn btn-primary" value="Submit" name="xss_reflected">
    </form>

<?php
    if(isset($_GET['xss_reflected']))
    {
        $value = $_GET['reflected_xss_infected_input'];
        echo "<br><br>Hello ".$value;
    }
?>
</div>

<?php
    include"includes/footer.php";
?>