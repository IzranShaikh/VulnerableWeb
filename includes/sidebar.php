
            <!-- Top Bar End -->
            <!-- Page content start -->
            <div class="page-contentbar">
               
                <!--left navigation start-->
                 </div>
<aside class="sidebar-navigation">
    <div class="scrollbar-wrapper">
        <div>

            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                <i class="mdi mdi-close"></i>
            </button>

            <!-- User Detail box -->
            <div class="user-details">
                <div class="pull-left">
                    <a><?php echo $_SESSION['session_username']; ?></a>
                    <p class="text-muted m-0"><?php echo $_SESSION['session_userrole']; ?></p>
                    <hr>
                </div>
            </div>
            <!--- End User Detail box -->

            <!-- Left Menu Start -->
            <ul class="metisMenu nav" id="side-menu">
                <li><a href="index.php">Dashboard </a></li>
                <li><a href="bruteforce.php">BruteForce</a></li>
                <li><a href="commandexecution.php">Command Execution</a></li>
                <li><a href="csrf.php">CSRF</a></li>
                <li><a href="sqlinjection.php?id=<?php echo $_SESSION['session_id']; ?>">SQL Injection</a></li>
                <li><a href="fileupload.php">File Upload</a></li>
                <li><a href="fileinclusion.php?page=includepage.php">File Inclusion</a></li>
                <li><a href="xssreflected.php">Reflected XSS</a></li>
                <li><a href="xssstored.php">Stored XSS</a></li>
            </ul>
            <!--Left Menu End-->

        </div>
    </div><!--Scrollbar wrapper-->
</aside>
<!--left navigation end-->
                
                <!--Page Right Content Start-->
                <div id="page-right-content">
                    <div class="container">
                        <div class="col-sm-12">
                            