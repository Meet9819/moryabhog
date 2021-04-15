

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>

<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>


<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Products</h4>
					<!-- /.box-title -->
					<div class="card-content">
						
<?php
include('db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    
   
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"../media/products/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
			$name = $_POST['name'];
   			$description = $_POST['description'];
   			
		   	$title = $_POST['title'];
		   
   			$detail = $_POST['detail'];
   			
            $save=mysqli_query($con,"INSERT INTO products (img,name,description,title,detail) VALUES 
            	('$img','$name','$description','$title','$detail')");
          


                        if ($save == 1){
                        $lastval =  mysqli_insert_id($con);

                          for($count=0; $count<$_POST["company_telephone_type"]; $count++)
                          {              
                              $type = trim($_POST["type"][$count]);
                              $units = trim($_POST["units"][$count]);
                              $mrp = trim($_POST["mrp"][$count]);
                              $price = trim($_POST["price"][$count]);
                              $pr = trim($_POST["pr"][$count]);

                              $qury = "INSERT INTO productprice(productid,type,units,mrp,price,pr) VALUES('";
                              $qury .= $lastval."','";
                              $qury .= $type."','";
                              $qury .= $units."','";
                              $qury .= $mrp."','";
                              $qury .= $price."','";
                              $qury .= $pr."')";

                          $req = mysqli_query($con,$qury);
                          $lastval =  mysqli_insert_id($con);
                          } 

                        } 
            
           ?>
                <script>
                alert('Successfully Inserted ...');
               window.location.href='productsview.php';
                </script>
                <?php

                             
    }
?>
 					 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 								<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 3527 x 2372 in pixels</p>
								</div>

								</div> 

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Name of Products</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Name" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Short Detail</label>
								<div class="col-sm-6">
									<input type="text" name="detail" class="form-control" id="" placeholder="Enter Short Detail" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Title of Products</label>
								<div class="col-sm-6">
									<input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="">
								</div>
							</div>

						<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Description"></textarea>  

									    <script>
									        CKEDITOR.replace('text');
									    </script>

								</div>
							</div>

                        <!--	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Price</label>
								<div class="col-sm-6">
									<input type="text" name="price" class="form-control" id="" placeholder="Enter Price" required="">
								</div>
							</div> -->






		<div class="form-group col-md-12">
          <div  id="companytelephonetable" width="100%">
            <div id='companytelephone0'>
            	

              <div class="form-group col-md-1">
                <label for="type" class="control-label mb-10">Qty
                </label>
              
                <input type="text" name="type[]" class="form-control" id="type" placeholder="Qty" tabindex="0" >
              </div>

                 <div class="form-group col-md-1">
                 </div>

              <div class="form-group col-md-1">
                <label for="details" class="control-label mb-10">Unit
                </label>

                 <input type="text" name="units[]" class="form-control" id="units" placeholder="units" tabindex="0" >
                </select>

              </div>
                 <div class="form-group col-md-1">
                 </div>
              <div class="form-group col-md-2">
                <label for="display" class="control-label mb-10">MRP
                </label>
                 <input type="text" name="mrp[]" class="form-control" id="mrp" placeholder="mrp" tabindex="0" >
              </div>
                 <div class="form-group col-md-1">
                 </div>
               <div class="form-group col-md-2">
                <label for="display" class="control-label mb-10">Price
                </label>
                 <input type="text" name="price[]" class="form-control" id="price" placeholder="price" tabindex="0" >
              </div> 
                <div class="form-group col-md-1">
                 </div>
               <div class="form-group col-md-2">
                <label for="display" class="control-label mb-10">Premium / Regular
                </label>
                  <input type="text" name="pr[]" class="form-control" id="pr" placeholder="pr" tabindex="0" >
                <!-- <select class="form-control" name="pr[]"  id="pr"> 
                 <option value=""></option>
                 <option value="Premium">Premium</option>
                 <option value="Regular">Regular</option>
                 </select> -->
              </div>

              <div class="form-group  col-md-2 "> 
                <label for="inputEmail" class="control-label mb-10"> <br><br>  </label>   
                <a tabindex="0" style="margin-right: 10px;" id="company_telephone_type_add"   class="btn btn-default btn-icon-anim btn-circle"><i  class="fa fa-plus" aria-hidden="true"></i></a> 
                <a  id='company_telephone_type_delete' class="btn btn-danger btn-icon-anim btn-circle"><i class="fa fa-trash" aria-hidden="true"></i></a> 
              </div>
            </div>
            <div id='companytelephone1'></div>
            <input type="hidden" name="company_telephone_type" id="company_telephone_type" value="1" class="hiddentextbox" />
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>                          
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>


                           <script type="text/javascript"> 
          $(document).ready(function(){
            var i=1;
           $("#company_telephone_type_add").click(function(){
          
            $('#companytelephone'+i).html("<div class='form-group col-md-12'></div>  <div class=' col-md-1 form-group'>   <input tabindex='24' type='text' class='form-control' name='type[]' placeholder='Qty' > </div> <div class='form-group col-md-1'></div> <div class=' col-md-1 form-group'><input tabindex='24' type='text' class='form-control' name='units[]' placeholder='units' ></div> <div class='form-group col-md-1'></div>  <div class=' col-md-2  form-group' >   <input tabindex='24' type='text' class='form-control' name='mrp[]' placeholder='mrp' ></div> <div class='form-group col-md-1'></div>  <div class=' col-md-2  form-group' >   <input tabindex='24' type='text' class='form-control' name='price[]' placeholder='price' ></div>    <div class='form-group col-md-1'></div>  <div class=' col-md-2  form-group' >  <input tabindex='24' type='text' class='form-control' name='pr[]' placeholder='pr' > </div>   ");
          
            $('#companytelephonetable').append('<div id="companytelephone'+(i+1)+'"></div>');
            i++; 
            $('#company_telephone_type').val(i);
          });
           $("#company_telephone_type_delete").click(function(){
               if(i>1){
               $("#companytelephone"+(i-1)).html('');
               i--;
               $('#company_telephone_type').val(i);
               }
           });
          
          
            
          });
          
        </script> 











						
 
														<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
										 <input class="btn btn-primary btn-sm waves-effect waves-light" type="submit" name="Submit" value="Submit" />

								</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>




	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	
<?php include "allscripts.php"; ?>
