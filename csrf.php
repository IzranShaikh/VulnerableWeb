<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
    if(isset($_POST['changepass']))
    {
        $newpass = $_POST['newpass'];
        $confpass = $_POST['confpass'];
        if($newpass != $confpass)
        {
            ?>
            <script>alert("Passwords in both field aren't identical");</script>
            <?php
        }
        else
        {
            $db_email = $_SESSION['session_email'];
            $query = "UPDATE vwausers SET user_pass = '$newpass' WHERE user_email = '$db_email' ";
            $update_password_query = mysqli_query($connection,$query);
            header("Location: csrf.php");
        }
    }
?>
<center><h2>Change Password</h2></center>
<form class="form-horizontal" action="csrf.php" method="post">
    <div class="form-group m-b-20">
        <div class="col-xs-12">
            <label for="newpass">New Password</label>
            <input class="form-control" type="password" id="emailaddress" name="newpass" required>
        </div>
    </div>
    <div class="form-group m-b-20">
        <div class="col-xs-12">
            <label for="currentpassword">Confirm Password</label>
            <input class="form-control" type="password" required id="password" name="confpass">
        </div>
    </div>
    <div class="form-group account-btn text-center m-t-10">
        <div class="col-xs-12">
            <button class="btn btn-lg btn-primary btn-block" name="changepass" type="submit">Change Password</button>
        </div>
    </div>
</form>

<?php
    include"includes/footer.php";
?>