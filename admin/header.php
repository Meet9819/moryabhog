
<div class="main-menu">
    <header class="header">
        <a href="index.php" class="logo">Morya Bhog</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="images/user.png" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.php">
                            <?php echo $_SESSION['username']; ?>!
</a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.php"><i class="fa fa-user"></i> Profile</a></div>
                   
                    <div class="control-item"><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="">
                    <a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>

                 <li>
                    <a class="waves-effect" href="user.php"><i class="menu-icon fa fa-briefcase"></i><span>User Management</span></a>
                </li>

                 <li>
                    <a class="waves-effect" href="banner.php"><i class="menu-icon fa fa-sliders"></i><span>Slider</span></a>
                </li>

             <!--   <li>
                    <a class="waves-effect" href="team.php"><i class="menu-icon fa fa-sliders"></i><span>team</span></a>
                </li>

                <li>
                    <a class="waves-effect" href="terms.php"><i class="menu-icon fa fa-align-center"></i><span> Static Contents</span></a>
                </li> -->

                
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-product-hunt "></i><span>Receipe</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="blogsadd.php">Add Receipe</a></li>
                        <li><a href="blogsview.php">View Receipe</a></li>
                    </ul>                   
                </li> 



                



                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-product-hunt "></i><span>Products</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="productsadd.php">Add Products</a></li>
                        <li><a href="productsview.php">View Products</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>


  


  <li>
                    <a class="waves-effect" href="testimonials.php"><i class="menu-icon fa fa-briefcase"></i><span>Testimonials</span></a>
                </li>

 <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss "></i><span>Gallery</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="galleryadd.php">Add Gallery</a></li>
                        <li><a href="galleryview.php">View Gallery</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
                     <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-play "></i><span>Videos</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="videosadd.php">Add Videos</a></li>
                        <li><a href="videosview.php">View Videos</a></li>
                    </ul>                   
                </li> 


 <li>
                    <a class="waves-effect" href="contactus.php"><i class="menu-icon fa fa-table"></i><span>Contact Us Form</span></a>
                </li>

            
        
              

            </ul>
           
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->




<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title"></h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        
        <!-- /.ico-item -->
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
      
        <a href="logout.php" class="ico-item fa fa-power-off"></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->



