<?php include"allcss.php"; ?>


	<?php include"header.php"; ?>

        <!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area"><Br><br><Br><br>
                    <h4 class="ph-title">About us</h4>
                    <ul class="agri-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">About</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
        
		<!-- about section start here -->
		<section class="about-us about-page padding-tb">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-12">
						<div class="about-thumb">
							<img src="assets/images/about/01.png" alt="about-thumb">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="section-wrapper">
                            <h3>‘Make Your Rotis an Everyday Delight with our Finest and Purest Wheat Flour.’</h3>
                            <h5>Nestled in the heart of the country, Morya Bhog Atta brings to you a distinct quality of wheat flour made out of our choicest grain selection that ensures your heart calls out for ‘One More Roti’</h5>
							<p style="
    text-align: justify;
">Established in the year 2020, Morya Bhog Atta prides itself on its choicest selection of high-quality wheat from the best farms of Madhya Pradesh. Marinating the age-old tradition of purchasing own wheat and grinding it at the local Chakki, with the rapidly evolving and busy cosmopolitan culture, we bring to your table perfect Rotis that will walk you through the conventional memory lane. Our art of processing and well-equipped technology ensures to lock in the freshness of wheat, making it rich in fibre for more energy and goodness of health.

</p><p style="
   
    text-align: justify;
">We truly believe in serving your family with our finest flour to make your family maintain a healthy, unadulterated and a quality diet. We consider it as our duty to serve the contemporary consumers with soft and rich in taste Rotis so that it reminds you of your “Maa ke haath ka khana”
Although we are a recent player into the market, but we come from years of vast experience and knowledge of What and How’s of a perfect quality Wheat grains. Morya Bhog therefore brings to you Wheat Flour that promises good health and happiness to your family via your Kitchen.</p>
						</div>
						
					</div>
				</div>
			</div>
		</section>
        <!-- about section ending here -->
        
       
       

	 <section class="testimonial-section padding-tb">
                <div class="container">
                    <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                         <h3>In Our Customers' Words</h3>
                       
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
                                                    <img src="media/testimonials/'.$row['img'].'" alt="testimonial">
                                                </div>
                                                <div class="testi-clients">
                                                    <a href="#"><h5>'.$row['name'].'</h5></a>
                                                    <p>'.$row['post'].'</p>
                                                    <div class="rating">
                                                             ';
                                                            for ($i=0; $i <$row['star'] ; $i++) { 
                                                                    echo "<i class='fa fa-star'></i>";
                                                                }"";
                                                                echo '
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testi-body">
                                                <p><span class="img-left"><img src="media/testimonials/qute.png" alt="quete"></span>'.$row['message'].'<span class="img-right"><img src="media/testimonials/quete-left.png" alt="quete"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>';}?>
                               



                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
	
        
		<!-- footer section start here -->
	<?php include"footer.php"; ?>

		<!-- scrollToTop ending here -->

	<?php include"allscript.php"; ?>

	</body>

<!-- Mirrored from labartisan.net/demo/chashi/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 05:12:57 GMT -->
</html>