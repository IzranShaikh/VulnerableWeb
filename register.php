<?php
    include"includes/header.php";
    if(isset($_POST['signup']))
    {
        $username = mysqli_real_escape_string($connection,$_POST['username_s']);
        $email = mysqli_real_escape_string($connection,$_POST['email_s']);
        $password = mysqli_real_escape_string($connection,$_POST['pass_s']);
        $query = "INSERT INTO vwausers(user_name,user_pass,user_email,user_role) VALUES('$username','$password','$email','user')";
        $register_query_result = mysqli_query($connection,$query);
        if(!$register_query_result)
        {
            die("Query Failed ".mysqli_error($connection));
        }
        else
        {
            ?>
            <script>alert('Thanks for Singing Up');</script>
            <?php
            header("Location: login.php");
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
                                            <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                   
                                    <form class="form-horizontal" action="register.php" method="post">
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="username">Name</label>
                                                <input class="form-control" type="text" name="username_s" id="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Email Address</label>
                                                <input class="form-control" type="email" name="email_s" id="emailaddress" required>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="pass_s" required id="password">
                                            </div>
                                        </div>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup">Sign Up Free</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- end card-box-->

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Already have an account? <a href="login.php" class="text-dark m-l-5">Sign In</a></p>
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