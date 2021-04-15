<?php include"allcss.php"; ?>

<?php include"header.php"; ?>


        <!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area"><Br><br><br><br>
                    <h4 class="ph-title">Recipe</h4>
                    <ul class="agri-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">All Recipe </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
		
        <!-- Blog Section Start Here -->
        <div class="blog-section blog-single padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row justify-content-center">
            
                        <div class="col-lg-12 col-12">
                          
                                <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM blogs ");

                                     while($row = mysqli_fetch_array($result))
                                    
                                      {
                                           echo '  <article> 
                                            <div class="post-item-2">
                                                <div class="post-inner">
                                                    <div class="post-thumb">
                                                        <img src="media/blogs/'.$row['img'].'" alt="blog">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4>'.$row['title'].'</h4>
                                                        <div class="meta-post">
                                                            <p><span class="admin-name">Admin <a href="#">'.$row['name'].'</a></span></p>
                                                        </div>
                                                        <p>'.$row['detail'].'</p>
                                                        <p>'.$row['description'].'</p>
                                                       
                                                      
                                                    </div>
                                                </div>
                                            </div>  </article>

                                        ';}?>
                               

                              
                          
                        </div>
                      <!--  <div class="col-lg-3 col-md-7 col-12">
                            <aside>
                                <div class="widget widget-author">
                                    <div class="widget-wrapper">
                                        <div class="admin-thumb">
                                            <img src="assets/images/team/01.jpg" alt="author">
                                        </div>
                                        <div class="admin-content">
											<h5>Sahjahan Sagor</h5>
                                            <p>Authoritatively restore orthog ips ineer installed Intrinsiclyts imperatives.</p>
                                            <div class="scocial-media">
                                                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                                <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget widget-category">
                                    <div class="widget-header">
                                        <h5>Post Categories</h5>
                                    </div>
                                    <ul class="agri-ul widget-wrapper">
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Show all</span><span>(148)</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Business</span><span>(20)</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Creative</span><span>(25)</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Inspiation</span><span>(30)</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>News</span><span>(28)</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Photography</span><span>(20)</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex flex-wrap justify-content-between"><span><i class="icofont-double-right"></i>Smart</span><span>(25)</span></a>
                                        </li>
                                    </ul>
                                </div>
            
                                <div class="widget widget-post">
                                    <div class="widget-header">
                                        <h5>Recent Post</h5>
                                    </div>
                                    <ul class="agri-ul widget-wrapper">
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/10.jpg" alt="product"></a>
                                            </div>
                                            <div class="post-content">
												<a href="blog-single.php"><h6>Conveniently utilize premier metho.</h6></a>
                                                <p>04 February 2019</p>
                                            </div>
										</li>
										<li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/11.jpg" alt="product"></a>
                                            </div>
                                            <div class="post-content">
												<a href="blog-single.php"><h6>Seamlessly fashion customiz before.</h6></a>
                                                <p>04 February 2019</p>
                                            </div>
										</li>
										<li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/12.jpg" alt="product"></a>
                                            </div>
                                            <div class="post-content">
												<a href="blog-single.php"><h6>Conveniently utilize premier metho.</h6></a>
                                                <p>04 February 2019</p>
                                            </div>
										</li>
										<li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="blog-single.php"><img src="assets/images/product/13.jpg" alt="product"></a>
                                            </div>
                                            <div class="post-content">
												<a href="blog-single.php"><h6>Seamlessly fashion customiz before.</h6></a>
                                                <p>04 February 2019</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget widget-instagram">
                                    <div class="widget-header">
                                        <h5>Chashi instagram</h5>
                                    </div>
                                    <ul class="agri-ul widget-wrapper d-flex flex-wrap justify-content-center">
                                        <li><a href="#"><img src="assets/images/product/01.jpg" alt="product"></a></li>
                                        <li><a href="#"><img src="assets/images/product/02.jpg" alt="product"></a></li>
                                        <li><a href="#"><img src="assets/images/product/05.jpg" alt="product"></a></li>
                                        <li><a href="#"><img src="assets/images/product/06.jpg" alt="product"></a></li>
                                    </ul>
                                </div>

                                <div class="widget widget-tags">
                                    <div class="widget-header">
                                        <h5>top tags</h5>
                                    </div>
                                    <ul class="agri-ul widget-wrapper">
                                        <li><a href="#">envato</a></li>
                                        <li><a href="#">themeforest</a></li>
                                        <li><a href="#">codecanyon</a></li>
                                        <li><a href="#">videohive</a></li>
                                        <li><a href="#">audiojungle</a></li>
                                        <li><a href="#">3docean</a></li>
                                        <li><a href="#">envato</a></li>
                                        <li><a href="#">themeforest</a></li>
                                        <li><a href="#">codecanyon</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section ENding Here -->

     
  <?php include"footer.php"; ?>


        
    <?php include"allscript.php"; ?>

