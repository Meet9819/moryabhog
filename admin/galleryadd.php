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
					<h4 class="box-title">Add Gallery</h4>
					<!-- /.box-title -->
					<div class="card-content">

						<?php

$con    = mysqli_connect("localhost","root","","atta");
$result = mysqli_query($con, "SELECT * FROM gallery ORDER BY id DESC LIMIT 1");

while ($row = mysqli_fetch_array($result)) {
    $idcount = $row['id'] + 1;
    
    //echo $idcount;
}
?>



						<form class="form-horizontal" action="galleryimageupload.php" method="post" enctype="multipart/form-data" >


						<input type="hidden" name="id" value="<?php echo $idcount;?>">


							





							<div class="form-group">
								<label for="four" class="col-sm-3 control-label">Gallery Main Image</label>
								<div class="col-sm-3">
								<input type="file" id="four" name="image">
								<p class="help-block">Image should be 1000 x 1000 in pixels</p>
								</div>

							

								</div>


					
							<div class="form-group">
								<label for="one" class="col-sm-3 control-label">Gallery Name</label>
								<div class="col-sm-3">
									<input type="text" name="title" class="form-control" id="one" placeholder="Enter Gallery Name...">
								</div>




							</div>


							<div class="form-group">
								<label for="seven" class="col-sm-3 control-label">Multiple Images Upload</label>
								<div class="col-sm-6">
									
 								<input class="fileinput btn-add" type="file" id="seven" name="files[]" multiple > <p class="help-block">Image should be 1000 x 1000 in pixels</p>
								
								</div>
							</div>
 
  


  						





						

							<div class="form-group margin-bottom-0">
									<label for="" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">  
<input type="submit" name="submit" value="Submit" class="btn btn-dark btn-sm waves-effect waves-light">

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
