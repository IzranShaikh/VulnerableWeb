<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
?>

<center><h2>Ping Service</h2></center>
<form action="commandexecution.php" method="get">
    <div class="input-group">
        <input placeholder="IP/Hostname/Domain Name" name="ip_to_ping" class="form-control" required="" type="text">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit" name="ping">Ping</button>
        </span>
    </div>
</form>

<?php
    if(isset($_GET['ping']))
    {
        $ip = $_GET['ip_to_ping'];
        passthru("ping ".$ip);
    }
?>

<?php
    include"includes/footer.php"
?>