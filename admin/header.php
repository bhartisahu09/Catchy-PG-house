<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        ADMIN PANEL
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username"><?php echo $admin_detail['aname'] ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="allpg.php"><i class=" fa fa-suitcase"></i>PG LIST</a></li>
                <li><a href="location.php"><i class="fa fa-cog"></i> Locations</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                

                  <li><a href="allpg.php">   <i class="fa fa-home"></i>All PG's</a></li>

                  <li><a href="user.php">   <i class="fa fa-user"></i>Users</a></li>
                 <li><a href="amenities.php">   <i class="fa fa-arrow-right"></i>Amenities Of PG</a></li>

                 <li><a href="contact_enquiry.php">   <i class="fa fa-phone"></i>Contact Enquiries</a></li>
                  <li><a href="location.php">   <i class="fa fa-map-marker"></i>Location</a></li>
                   <li><a href="logout.php">   <i class="fa fa-key"></i>Logout</a></li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->