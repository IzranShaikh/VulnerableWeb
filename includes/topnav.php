<body>
<div id="page-wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <div class="">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="logo" class="logo-lg" />
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>
<div class="navbar navbar-default" style="background-color:black;" role="navigation">
    <div class="container">
        <div class="">

            <div class="pull-left">
                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                    <i class="fa fa-bars"></i>
                </button>
                <span class="clearfix"></span>
            </div>

            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                <li class="dropdown top-menu-item-xs">
                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><span><?php echo $_SESSION['session_username']; ?></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="includes/logout.php"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
</div> <!-- end navbar -->