<?php include"allcss.php"; ?>

<?php include"header.php"; ?>

	
		<!-- preloader ending here -->
		
		<!-- Mobile Menu Start Here -->
	
        <!-- desktop menu ending here -->
        
        <!-- Banner Section Start Here -->
           <?php include('admin/db.php');
         $result = mysqli_query($con,"SELECT * FROM slider  ");

         while($row = mysqli_fetch_array($result))
                                    
          {
               echo ' 
        <div class="banner banner-pad-1 bg_img" style="background: url(media/slider/'.$row['img'].');">
            <div class="container">
                <div class="banner-content">
                    <div class="banner-title">'.$row['title'].'</div>
                    <div class="banner-desc">'.$row['description'].'</div>
                    <a target="_blank" href="'.$row['link'].'" class="lab-btn"><span>'.$row['button'].' </span></a>
                </div>
            </div>
        </div> 

        '; } ?>

		<!-- Banner Section Ending Here -->
		
		<!-- Feature Secton Start Here -->
		<section class="feature-section padding-tb">
			<div class="shape-feature d-none d-xl-block">
				<img src="images/feature/shape/01.png" alt="feature-thumb" class="shape-1">
				<img src="images/feature/shape/02.png" alt="feature-thumb" class="shape-2">
				<img src="images/feature/shape/03.png" alt="feature-thumb" class="shape-3">
			</div>
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>Going Extra Mile for Your Health</h3>
					<p>Conveniently customize proactive services leveraged interfaces without Globally</p>
				</div>
				<div class="section-wrapper">
					<div class="row">
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="feature-item">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img src="images/feature/01.png" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>ISO Certified</h5></a>
										<p>Serving healthy, unadulterated and a quality diet to your family</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="feature-item">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img src="images/feature/02.png" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>Advanced Technology</h5></a>
										<p>Our well-equipped processing technology ensures to lock in the goodness of wheat</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
							<div class="feature-item">
								<div class="feature-inner">
									<div class="feature-thumb">
										<img src="images/feature/03.png" alt="feature">
									</div>
									<div class="feature-content">
										<a href="#"><h5>High Quality Fibre</h5></a>
										<p>Serving healthy, unadulterated and a quality diet to your family</p>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Secton ending Here -->

		<!-- about section start here -->
		<section class="about-us bg_img_1 bg_img padding-tb">
			<div class="shape-about d-none d-xl-block">
				<img src="images/about/02.png" alt="abs-thumb">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-thumb ml-about-thumb wow fadeInUp" data-wow-delay="0.4s">
							<img src="images/about/01.png" alt="about-thumb">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="section-header text-left wow fadeInUp" data-wow-delay="0.3s">
							<h3>‘Make Your Rotis an Everyday Delight with our Finest and Purest Wheat Flour.’</h3>
							<p>Nestled in the heart of the country, Morya Bhog Atta brings to you a distinct quality of wheat flour made out of our choicest grain selection that ensures your heart calls out for ‘One More Roti’</p>
						</div>
						<div class="section-wrapper">
							<div class="about-item wow fadeInUp" data-wow-delay="0.4s">
								<div class="about-inner">
									<div class="about-thumb">
										<img src="images/about/icon/01.jpg" alt="about">
									</div>
									<div class="about-content">
										<a href="#"><h5>Certified Organic Standards</h5></a>
										<p>Continually aggregate frictionle interc without globally wellies richard.</p>
									</div>
								</div>
							</div>
							<div class="about-item wow fadeInUp" data-wow-delay="0.5s">
								<div class="about-inner">
									<div class="about-thumb">
										<img src="images/about/icon/02.jpg" alt="about">
									</div>
									<div class="about-content">
										<a href="#"><h5>Fair Prices For You</h5></a>
										<p>Continually aggregate frictionle interc without globally wellies richard.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="text-left wow fadeInUp" data-wow-delay="0.6s">
							<a href="#" class="lab-btn"><span>About Us</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- about section ending here -->

		<!-- product section start here
		<section class="product-section padding-tb">
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.4s">
					<h3>Agricul Farm Organic Products</h3>
					<p>Conveniently customize proactives into everaged interfaces without Globally</p>
				</div>
				<div class="section-wrapper wow fadeInUp" data-wow-delay="0.5s">
					<ul class="agri-ul product-filter-name">
						<li data-filter="*" class="active">See All</li>
						<li data-filter=".fruits">Fruits</li>
						<li data-filter=".wheat">Wheat</li>
						<li data-filter=".vegetable">Vegetable</li>
						<li data-filter=".milk">Milk</li>
						<li data-filter=".honey">Honey</li>
					</ul>

					<div class="grid">
	    				<div class="product-item fruits">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/01.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Fruits</a>
								</div>
		    				</div>
						</div>
						<div class="product-item wheat">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/02.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Machine</a>
								</div>
		    				</div>
						</div>
						<div class="product-item honey">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/03.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Honey</a>
								</div>
		    				</div>
						</div>
						<div class="product-item milk">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/04.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Sheep</a>
								</div>
		    				</div>
						</div>
						<div class="product-item wheat">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/05.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Rice</a>
								</div>
		    				</div>
						</div>
						<div class="product-item vegetable">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/06.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Fruits</a>
								</div>
		    				</div>
						</div>
						<div class="product-item milk">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/07.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Chicken</a>
								</div>
		    				</div>
						</div>
						<div class="product-item vegetable">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/08.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Cabbage</a>
								</div>
		    				</div>
						</div>
						<div class="product-item milk">
		    				<div class="product-inner">
		    					<div class="product-thumb">
		    						<img src="images/product/09.jpg" alt="product">
								</div>
								<div class="product-content">
									<a href="#" class="product-name">Cows</a>
								</div>
		    				</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- product section ending here -->

		<!-- agricul farm section start here 
		<section class="agricul-farm-section padding-tb bg_img_1 bg_img ">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-7 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="farm-left">
								<div class="agricul-farm-thumb">
									<img src="images/farm/01.png" alt="agricul-farm">
								</div>
								<div class="agricul-farm-animate">
									<div class="farm-line">
										<div class="lab-tooltip"><p>Australia</p></div>
										<span class="pluse_1"></span><span class="pluse_2"></span>
									</div>
									<div class="farm-line">
										<div class="lab-tooltip"><p>Canada</p></div>
										<span class="pluse_1"></span><span class="pluse_2"></span>
									</div>
									<div class="farm-line">
										<div class="lab-tooltip"><p>Russia</p></div>
										<span class="pluse_1"></span><span class="pluse_2"></span>
									</div>
									<div class="farm-line">
										<div class="lab-tooltip"><p>Koriya</p></div>
										<span class="pluse_1"></span><span class="pluse_2"></span>
									</div>
									<div class="farm-line">
										<div class="lab-tooltip"><p>Bangladesh</p></div>
										<span class="pluse_1"></span><span class="pluse_2"></span>
									</div>
									<div class="farm-line">
										<div class="lab-tooltip"><p>Singapur</p></div>
										<span class="pluse_1"></span><span class="pluse_2"></span>
									</div>
								</div>
                            </div>
						</div>
                        <div class="col-lg-5 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="farm-right">
                                <div class="section-header text-center text-lg-left">
                                    <h3>Huge Agricul Farm We Are On The World.</h3>
									<p>Conveniently customize proactive the web services globally interfaces without globally continually aggregat few month without globally wellies richard.</p>
									<a href="#" class="lab-btn"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- agricul farm section ending here -->

		<!-- team member section start here --> 


		
<?php include('admin/db.php'); $result = mysqli_query($con,"SELECT * FROM products order by id desc"); 
 $tmpCount = 1;
while($row = mysqli_fetch_array($result))
{

echo '

		<!-- Shop Page Section start here -->		            
        <section class="shop-single padding-tb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12 sticky-widget">
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-12">
                                    <div class="product-thumb">
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="shop-item">
                                                        <div class="shop-thumb">
                                                            <img src="media/products/'.$row['img'].'" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="shop-item">
                                                        <div class="shop-thumb">
                                                            <img src="media/products/2.jpg" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="shop-item">
                                                        <div class="shop-thumb">
                                                           <img src="media/products/3.jpg" >
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="shop-navigation d-flex flex-wrap">
                                                <div class="shop-nav shop-slider-prev"><i class="icofont-simple-left"></i></div>
                                                <div class="shop-nav shop-slider-next"><i class="icofont-simple-right"></i></div>
                                            </div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="post-content">
                                        <h4>'.$row['name'].'</h4>
                                        <p class="rating">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            
                                        </p>
                                        <h4>
                                           ₹ 340.00
                                        </h4>
                                        <h5>
                                            Product Description
                                        </h5>
                                        <p>
                                           '.$row['title'].'
                                        </p>   <p>
                                            '.$row['detail'].'
                                        </p>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>

        '; } ?>

        <!-- Shop Page Section ending here -->
        


		<section class="team-member-section padding-tb">
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>Our Aatta Team</h3>
					<p>Conveniently customize proactives interfaces without Globally</p>
				</div>
				<div class="section-wrapper">
					<div class="row">
						       <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM team  ");

                                     while($row = mysqli_fetch_array($result))
                                    
                                      {
                                           echo ' 
						<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="team-item">
								<div class="team-inner">
									<div class="team-thumb">
										<img src="media/team/'.$row['img'].'" alt="team-image">
									</div>
									<div class="team-content">
										<a href="#"><h5>'.$row['name'].'</h5></a>
										<p>'.$row['designation'].'</p>
									
									</div>
								</div>
							</div>
						</div>'; } ?>

					</div>
				</div>
			</div>
		</section>
		<!-- team member section ending here -->

		<!-- agricul farm section start here -->
		<section class="agricul-fruits-section bg_img_1 bg_img">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row flex-row-reverse align-items-center">
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="fruits-left">
								<div class="agricul-fruits-thumb">
									<img src="images/02.png" alt="agricul-farm">
								</div>
                            </div>
						</div>
                        <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="fruits-right">
                                <div class="section-header text-center text-lg-left">
                                    <h2>Fresh Agricul Fruits <span>in Our Store</span></h2>
									<p>Conveniently customize proactiv web services globally nterfaces without globally continually aggregate without globally .  </p>
									<a href="#" class="lab-btn"><span>Buy Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- agricul farm section ending here -->

		<!-- testimonial section start here -->
 <section class="testimonial-section padding-tb">
                <div class="container">
                    <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                        <h3>Testimonials</h3>
                        <p>Conveniently customize proactive  services leveraged interfaces without Globally </p>
                    </div>
                    <div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
                        <div class="testi-slider">
                            <div class="swiper-wrapper">

						       <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM testimonials  ");

                                     while($row = mysqli_fetch_array($result))
                                    
                                      {
                                           echo ' 


                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="testi-inner">
                                            <div class="testi-head">
                                                <div class="testi-thumb">
                                                    <img src="images/testimonials/'.$row['img'].'" alt="testimonial">
                                                </div>
                                                <div class="testi-clients">
                                                    <a href="#"><h5>'.$row['name'].'</h5></a>
                                                    <p>'.$row['post'].'</p>
                                                    <div class="rating">
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testi-body">
                                                <p><span class="img-left"><img src="images/testimonials/qute.png" alt="quete"></span>'.$row['message'].'<span class="img-right"><img src="images/testimonials/quete-left.png" alt="quete"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>';}?>
                               



                            </div>
                        </div>
                    </div>
                </div>
            </section>
		<!-- testimonial section ending here -->

		<!-- blog section start here -->
		<section class="blog-section padding-tb bg_img_1 bg_img">
			<div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h3>Today Receipe</h3>
					<p>Conveniently customize proactive  services leveraged interfaces without Globally </p>
				</div>
				<div class="section-wrapper">
					<div class="row justify-content-center">

			       <?php include('admin/db.php');
                                     $result = mysqli_query($con,"SELECT * FROM blogs limit 3 ");
                                     while($row = mysqli_fetch_array($result))
                                      {
                                           echo ' 
											<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">

												<div class="post-item">
													<div class="post-inner">
														<div class="post-thumb">
															<a href="blog-single.html">
																<img src="media/blogs/'.$row['img'].'" alt="blog">
															</a>
														</div>
														<div class="post-content">
															<a href="blog-single.html"><h5>'.$row['title'].'</h5></a>
															<div class="meta-post">
																<p><span class="admin-name"><a href="#">'.$row['detail'].'</a></span><span class="comment-name"></span></p>
															</div>
															<div class="text-btn">
																<a href="#">View Receipe</a>
															</div>   
														</div>
													</div>
												</div>
											</div>';
										}?>
						
					</div>
				</div>
			</div>
		</section>
		<!-- blog section ending here -->

		<!-- sponsor section start here -->
		<div class="sponsor-section padding-tb">
			<div class="container">
				<div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
					<div class="sponsor-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="images/sponsor/01.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="images/sponsor/02.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="images/sponsor/03.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="images/sponsor/04.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="sponsor-item">
									<div class="sponsor-thumb">
										<a href="#"><img src="images/sponsor/05.png" alt="sponsor"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- sponsor section ending here -->

	

		<!-- footer section start here -->
<?php include"footer.php"; ?>

		<!-- scrollToTop ending here -->

		<?php include"allscript.php"; ?>

		
	</body>

<!-- Mirrored from labartisan.net/demo/chashi/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 05:07:51 GMT -->
</html>