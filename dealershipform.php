<?php include"allcss.php"; ?>

<?php include"header.php"; ?>

        <!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area"><Br><br><br><br>
                    <h4 class="ph-title">Dealership Enquiry</h4>
                    <ul class="agri-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">Dealership Enquiry</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
        
        <!-- Contact Us Section Start Here -->
        <div class="contact-section padding-tb">
            <div class="container">
                 
                <div class="contac-bottom">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-12" style="padding: 10px">
                             
                             <img src="media/delearship.jpg">
                        </div>
                        <div class="col-lg-6 col-12" style="padding: 10px">
                            <div class="contact-form">
   
                                <b><span style="font-size:20px">Dealership Requirement</span> - <br><Br> Eligibility criteria for obtaining Dealership of Moryabhog Atta: <br><br>

                                - A 300 sq ft Godown in Maharashtra <br>
                                - Dealer must have minimum 3 years of experience in FMCG Goods <br>
                                - A Sales Team with experience in FMCG Goods <br><br></b>

                                <?php
                                    include('admin/db.php');
                                     if(isset($_POST['save']))
                                    {
                                      $firstname = $_POST['firstname'];
                                      $lastname = $_POST['lastname'];
                                      $email = $_POST['email'];
                                      $mobile = $_POST['mobile'];
                                      $message = $_POST['message'];
                                      $state = $_POST['state'];
                                      $city = $_POST['city'];
                                      $pincode = $_POST['pincode'];
                                      $address = $_POST['address'];

                                      $save=mysqli_query($con,"INSERT INTO delearshipform (firstname,lastname,email,mobile,message,state,city,pincode,address) VALUES ('$firstname','$lastname','$email','$mobile','$message','$state','$city','$pincode','$address')");

                                       //9819216666
                                      $ch = curl_init("http://wepro.design4web.in/wapp/api/send?apikey=9f7a00b20d774943a7c15f53b23e6f36&mobile=9819216666&msg=Dealership_Request__$firstname,Mobile-$mobile,Address-$state,$city,$pincode,$address"); 
                                      // such as http://example.com/example.xml
                                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                      curl_setopt($ch, CURLOPT_HEADER, 0);
                                      $data = curl_exec($ch);
                                      curl_close($ch);
                                     ?>

                                                    <script>
                                                    alert('Thank You..! Will Get back to You ...');
                                                    window.location.href='dealershipform.php';
                                                    </script>
                                                    <?php

                                                                 
                                        }
                                    ?>


                                <form action="" method="post" enctype="multipart/form-data" class="comment-form">
                                    <input type="text" name="firstname" class="" placeholder="First Name*">
                                    <input type="text" name="lastname" class="" placeholder="Last Name*">
                                    <input type="email" name="email" class="" placeholder="Email*">
                                    <input  style="width: 100%" type="text" name="mobile" class="" placeholder="Mobile*">
                                    
                                    <select name="state" style="padding: 10px 15px;border: 1px solid #f0f0f0;background: #fff;width: 100%;margin-bottom: 15px;">    
                                       <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                       <option value="Andhra Pradesh">Andhra Pradesh</option>
                                       <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                       <option value="Assam">Assam</option>
                                       <option value="Bihar">Bihar</option>
                                       <option value="Chandigarh">Chandigarh</option>
                                       <option value="Chhattisgarh">Chhattisgarh</option>
                                       <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                                       <option value="Daman &amp; Diu">Daman &amp; Diu</option>
                                       <option value="Delhi">Delhi</option>
                                       <option value="Goa">Goa</option>
                                       <option value="Gujarat">Gujarat</option>
                                       <option value="Haryana">Haryana</option>
                                       <option value="Himachal Pradesh">Himachal Pradesh</option>
                                       <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                       <option value="Jharkhand">Jharkhand</option>
                                       <option value="Karnataka">Karnataka</option>
                                       <option value="Kerala">Kerala</option>
                                       <option value="Lakshadweep">Lakshadweep</option>
                                       <option value="Madhya Pradesh">Madhya Pradesh</option>
                                       <option selected="" value="Maharashtra">Maharashtra</option>
                                       <option value="Manipur">Manipur</option>
                                       <option value="Meghalaya">Meghalaya</option>
                                       <option value="Mizoram">Mizoram</option>
                                       <option value="Nagaland">Nagaland</option>
                                       <option value="Odisha">Odisha</option>
                                       <option value="Pondicherry">Pondicherry</option>
                                       <option value="Punjab">Punjab</option>
                                       <option value="Rajasthan">Rajasthan</option>
                                       <option value="Sikkim">Sikkim</option>
                                       <option value="Tamil Nadu">Tamil Nadu</option>
                                       <option value="Telangana">Telangana</option>
                                       <option value="Tripura">Tripura</option>
                                       <option value="Uttar Pradesh">Uttar Pradesh</option>
                                       <option value="Uttarakhand">Uttarakhand</option>
                                       <option value="West Bengal">West Bengal</option> 
                                    </select>
                                   
                                    <input type="text" name="city" class="" placeholder="City*">
                                    <input type="text" name="pincode" class="" placeholder="Pincode*">

                                    <input style="width: 100%" type="text" name="address" class="" placeholder="Address*">
                                    <textarea name="message" id="role" cols="30" rows="3" placeholder="Message*"></textarea>
                                    
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
