<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
    $id = $_SESSION['session_id'];
?>

<form action="sqlinjection.php?id=<?php echo $id; ?>" method="get">
    <div class="form-group m-b-20">
        <div class="col-xs-12">
            <label for="id">Enter ID</label><br>
            <input class="form-control" type="text" name="id" required><br>
        </div>
    </div>
    <div class="form-group account-btn text-center m-t-10">
        <div class="col-xs-12">
            <button class="btn btn-lg btn-primary btn-block" name="getvalue" type="submit">Submit</button>
            <br>
        </div>
    </div>
</form>

<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM vwausers WHERE user_id = $id ";
        $get_details_query = mysqli_query($connection,$query);
        $rowcount = mysqli_num_rows($get_details_query);
        if($rowcount == 0)
        {
            echo "<b>Incorrect ID</b>";
        }
        else
        {
            while($data_fetched = mysqli_fetch_assoc($get_details_query))
            {
                $username = $data_fetched['user_name'];
                $useremail = $data_fetched['user_email'];
                $userrole = $data_fetched['user_role'];
                $userid = $data_fetched['user_id'];
                $userpass = $data_fetched['user_pass'];
                echo "<pre><big>User Name : </big>".$username."<br></pre>";
                echo "<pre><big>User Email : </big>".$useremail."<br></pre>";
                echo "<pre><big>User Role : </big>".$userrole."</pre>";
            }
        }
    }
?>

<?php
    include"includes/footer.php";
?>