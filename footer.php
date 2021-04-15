	<!-- newsletters section start here 
		<div class="newsletter-section">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-center align-items-center">
					<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="newsletter-title">
							<h4>Subscribe Our Newsletter</h4>
						</div>
					</div>
					<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="newsletter-form">
							<form action="http://labartisan.net/" class="d-flex flex-wrap">
								<input type="text" placeholder="Enter Your Email" class="input-email">
								<input type="submit" value="Subscribe" class="subscribe-btn">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- newsletters section ending here -->
				<footer class="footer-section padding-tb pb-0">
			<div class="container">
				<div class="footer-top">
					<div class="row">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item">
								<div class="footer-inner">
									<div class="footer-logo">
										<img style="width: 200px" src="assets/images/logo/flogo.png" alt="footer-logo">
									</div>
									<div class="footer-desc">
										<p>Nestled in the heart of the country, Morya Bhog Atta brings to you a distinct quality of wheat flour made out of our choicest grain selection that ensures your heart calls out for ‘One More Roti’</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-addtess">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>Keep In Touch</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<li>
												<div class="icon">
													<i class="icofont-google-map"></i>
												</div>
												<div class="detalis">
													  <p>Shree Sai Datta Mill Private Limited 
                                                        Shop No 10, Target Mall, Opp BMC Office,
                                                        Chandavarkar Road, Borivali West, <br>
                                                        Mumbai -400092.</p>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="icofont-phone"></i>
												</div>
												<div class="detalis">
													 <p>+91 98192 16666 <br>+91 98331 34444 </p>
												 
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="icofont-envelope"></i>
												</div>
												<div class="detalis">
													<p>info@moryabhog.com</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-blog">
								<div class="footer-inner">
									<div class="footer-title">
										<h5> Products</h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">
											<?php include('admin/db.php'); $result = mysqli_query($con,"SELECT * FROM products order by id desc"); 
												 $tmpCount = 1;
												while($row = mysqli_fetch_array($result))
												{

												echo '
												<li>
												<div class="thumb">
													<a href="shop.php"><img src="media/products/'.$row['img'].'" alt="footer-blog"></a>
												</div>
												<div class="detalis">
													<a href="shop.php"><h5>'.$row['name'].'</h5></a>
													
												</div>
											</li>
											'; } ?>

											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="footer-item footer-gallery">
								<div class="footer-inner">
									<div class="footer-title">
										<h5>Photo Gallery </h5>
									</div>
									<div class="footer-body">
										<ul class="agri-ul">

											   <?php include "admin/db.php"; ?>

                <?php
                               

                    $query=mysqli_query($con,"SELECT * from `gallery`");
                    while($row=mysqli_fetch_array($query)){
                    
                                    echo '	<li><a href="gallerydetailpage.php?q='.$row['id'].'"><img src="media/gallery/'.$row['img'].'" alt="footer-gallery"></a></li>

                                     


                 ';}?>

										
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p>&copy; 2020<a href="index.php" target="_blank"><span></span></a>All Rights Reserved.  <a href="http://diptik.in/" target="_blank"><span>Designed and developed by Dipti K</span></a></p>
				</div>
			</div>
		</footer>
		<!-- footer section ending here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>