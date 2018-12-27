<?php
    include"includes/header.php";
    if(isset($_POST['login']))
    {
        $email = $_POST['email_l'];
        $pass = $_POST['pass_l'];
        $query = "SELECT * FROM vwausers WHERE user_email = '$email' AND user_pass = '$pass' ";
        $login_query = mysqli_query($connection,$query);
        if(!$login_query)
        {
            echo "Query Failed ".mysqli_error($connection);
        }
        $rowcount = mysqli_num_rows($login_query);
        if($rowcount == 0)
        {
            ?>
            <script>
            alert("INCORRECT USERNAME OR PASSWORD");
            </script>
            <?php
        }
        while($data_fetched = mysqli_fetch_assoc($login_query))
        {
            $username = $data_fetched['user_name'];
            $email = $data_fetched['user_email'];
            $password = $data_fetched['user_pass'];
            $userrole = $data_fetched['user_role'];
            $userid = $data_fetched['user_id'];
            
            #ASSIGNING SESSIONS
            $_SESSION['session_username'] = $username;
            $_SESSION['session_email'] = $email;
            $_SESSION['session_userrole'] = $userrole;
            $_SESSION['session_password'] = $password;
            $_SESSION['session_id'] = $userid;
            ?>
            <script>alert('Logged In');</script>
            <?php
            header("Location: index.php");
        }
    }
?>
<body>

    <!-- HOME -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrapper-page">
                        <div class="m-t-40 card-box">
                            <div class="text-center">
                                <h2 class="text-uppercase m-t-0 m-b-30">
                                    <a href="index.php" class="text-success">
                                        <span><img src="assets/images/logo.png" alt="" height="30"></span>
                                    </a>
                                </h2>
                                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                            </div>
                            <div class="account-content">
                               
                                <form class="form-horizontal" action="login.php" method="post">
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="emailaddress">Email address</label>
                                            <input class="form-control" type="email" id="emailaddress" name="email_l" required>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" required id="password" name="pass_l">
                                        </div>
                                    </div>
                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Sign In</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- end card-box-->

                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="register.php" class="text-dark m-l-5">Sign Up</a></p>
                            </div>
                        </div>

                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

<?php include"includes/footer.php" ?>