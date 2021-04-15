<?php include"allcss.php"; ?>

<?php include"header.php"; ?>

        <!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area"><Br><br><br><br>
                    <h4 class="ph-title">Get in Touch</h4>
                    <ul class="agri-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">Get in Touch </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
        
        <!-- Contact Us Section Start Here -->
        <div class="contact-section padding-tb">
            <div class="container">
                <div class="contac-top">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="icofont-google-map"></i>
                                </div>
                                <div class="contact-details">
                                    <p>Shree Sai Datta Mill Private Limited 
                    Shop No 10, Target Mall, Opp BMC Office,
                    Chandavarkar Road, Borivali West, <br>
                    Mumbai -400092.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="icofont-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <p>+91 98192 16666 <br>+91 98331 34444 </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="icofont-envelope"></i>
                                </div>
                                <div class="contact-details">
                                   <p>info@moryabhog.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contac-bottom">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12">
                            <div class="location-map">
                                <div id="map">
                                   <div style="text-decoration:none; overflow:hidden;max-width:100%;width:600px;height:500px;"><div id="gmapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=mumbai&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlecode" rel="nofollow" href="https://www.embed-map.com" id="grabmap-authorization">https://www.embed-map.com</a><style>#gmapdisplay .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">

                                <?php
                                    include('admin/db.php');
                                     if(isset($_POST['save']))
                                    {
                                      $name = $_POST['name'];
                                      $surname = $_POST['surname'];
                                      $email = $_POST['email'];
                                      $mobile = $_POST['mobile'];
                                      $message = $_POST['message'];

                                      $save=mysqli_query($con,"INSERT INTO contactform (name,surname,email,mobile,message) VALUES ('$name','$surname','$email','$mobile','$message')");
                                     ?>
                                                    <script>
                                                    alert('Thank You..! Will Get back to You ...');
                                                    window.location.href='contactus.php';
                                                    </script>
                                                    <?php

                                                                 
                                        }
                                    ?>


                                <form action="" method="post" enctype="multipart/form-data" class="comment-form">
                                    <input type="text" name="name" class="" placeholder="First Name*">
                                    <input type="text" name="surname" class="" placeholder="Last Name*">
                                    <input type="email" name="email" class="" placeholder="Email*">
                                    <input type="text" name="mobile" class="" placeholder="Mobile*">
                                    <textarea name="message" id="role" cols="30" rows="10" placeholder="Message*"></textarea>
                                    
                                    <input class="lab-btn" type="submit" name="save" value="Submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Section ENding Here -->
      
        
		<!-- footer section start here -->
<?php include"footer.php"; ?>


		
<?php include"allscript.php"; ?>
