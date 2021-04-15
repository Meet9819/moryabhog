                  <?php include"allcss.php"; ?>


                  <?php include"header.php"; ?>

        <!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area"><Br><br><br><br>
                    <h4 class="ph-title">Shop</h4>
                    <ul class="agri-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">Atta Products</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
		

          <?php
                                    include('admin/db.php');
                                    
                                    ?>


                              


<?php include('admin/db.php'); $result = mysqli_query($con,"SELECT * FROM products order by id desc"); 
 $tmpCount = 1;
while($row = mysqli_fetch_array($result))
{
$id = $row['id'];
$name = $row['name'];
$price = $row['price'];
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
                                        
                                        
                                        ';?>
                                         
                                        
                                        <select name=""  id="mySelect" onchange="myFunction()" class="gt-form-control" style="padding: 8px;width: 50%;">
                                            <option value="">Select Variant</option>
                                              <?php include('admin/db.php');
                                             $result2 = mysqli_query($con,"SELECT * FROM productprice where productid = $id");
                                             while($row2 = mysqli_fetch_array($result2))
                                             {
                                            echo '<option data-id="'.$row2['price'].'" value="'.$row2['price'].'">'.$row2['type'].' '.$row2['units'].' - '.$row2['pr'].'</option>'; } ?>
                                         </select>
                                         

 

               
                                        <h4 id="demo"></h4>
                                        
                                        <script>
                                        function myFunction() {
                                          var x = document.getElementById("mySelect").value;
                                          document.getElementById("demo").innerHTML = " ₹ " + x;
                                        } 


                                     
                                        </script>


 
                                         
                                 <?php echo '
                                        
                                        <br>
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
                        <div class="review">
                            <ul class="agri-ul review-nav">
                             
                                <li class="rev active" data-target="review-content-show">Order Now</li>   <li class="desc " data-target="description-show"> Description</li>
                            </ul>
                            <div class="review-content review-content-show">
                                <div class="review-showing">
                                  
                                    <div class="client-review">
                                        <div class="review-form">
                                            <div class="review-title">
                                                <h5>Place an Order </h5>
                                            </div>

                            <form action="instamojo/pay.php"  method="post" >
                            
                                <textarea style="display:none" name="product_name" rows="2" cols="50">'.$name.'</textarea>
                                <input type="hidden" value="'.$name.'" name="productcode" >
                                <input type="hidden" value="'.$name.'" name="productname" >
                                                           

                                <div class="row"> 
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                      <input type="text" readonly=""  name="product_price" class="product_price">  
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="number" name="qty" placeholder="Qty*" required="" min="1" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="name" placeholder="Name*" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="email" name="email" placeholder="Email*"  required="">
                                </div> 

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" placeholder="Phone*"  required="">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="address" rows="5" placeholder="Your Address*"  required=""></textarea>
                                </div>
                            
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input style="    background-color: #ff6f00;
    color: #ffffff; 
    text-transform: capitalize;
    border: 1px solid #ff6f00;
    border-radius: 3px;" type="submit" class="ast_btn" name="save" value="Buy Now" />
                                </div>
    
 

                            </div> 

                        </form>


                                        </div>
                                    </div>
                                </div>
                                <div class="description">
                                    <p>'.$row['description'].'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        '; } ?>

        <!-- Shop Page Section ending here -->
        
 

                        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                         <script type="text/javascript">
                                        $('#mySelect').change(function(){
                                              var criteria_id =  $(':selected',this).data('id');
                                            $('.product_price').val(criteria_id);                                        
                                        });
                         </script> 


        
		<!-- footer section start here -->
	                 <?php include"footer.php"; ?>


		
		                <?php include"allscript.php"; ?>

	</body>

<!-- Mirrored from labartisan.net/demo/chashi/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 05:14:20 GMT -->
</html>