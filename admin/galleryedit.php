


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
					<h4 class="box-title">Edit Gallery</h4>
					<!-- /.box-title -->
					<div class="card-content">

				


<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT  title,img FROM gallery WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {

        header("Location: galleryview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
$title = $_POST['title'];



        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = '../media/gallery/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   
                        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        { 

$stmt = $DB_con->prepare('UPDATE gallery SET title=:title, img=:img
    WHERE id=:id');

 	$stmt->bindParam(':title',$title);   
    $stmt->bindParam(':img',$img);
     

            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                
                <script>
                alert('Successfully Updated ...');
                window.location.href='galleryview.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>




					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >


						
							<div class="form-group">
								<label for="one" class="col-sm-3 control-label">Gallery Name</label>
								<div class="col-sm-3">
									<input type="text" name="title" class="form-control" id="one" placeholder="Enter Gallery Name..." value="<?php echo $title; ?>">
								</div>


							

							</div>






							<div class="form-group">
								<label for="four" class="col-sm-3 control-label">Product Main Image</label>
								<div class="col-sm-3">   

									<img src="../media/gallery/<?php echo $img; ?>" />


  <input type="file" name="user_image" accept="image/*" />

								<p class="help-block">Image should be 1000 x 1000 in pixels</p>
								

								</div>


								</div>


						


              </div>

							<div class="form-group margin-bottom-0">
									<label for="" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">  
<input type="submit" name="btn_save_updates" value="Update" class="btn btn-dark btn-sm waves-effect waves-light">
   



										</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white --> 







<?php $id = $_GET['edit_id']; 
?>


    <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Add More Images</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        


<form action="gallerysubimageupload.php" method="post" enctype="multipart/form-data">
  

        <input type="hidden" name="idd" value="<?php echo $id = $_GET['edit_id']; ?> ">

        <div class="form-group">
                               <div class="col-sm-6"> 

                              <input type="file" name="files[]" multiple >


                                <p class="help-block">Image should be 1000 x 1000 in pixels</p>  

                                 <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit"  name="submit" value="Upload" /> 
                                </div>

                                </div>


</form>

</div></div></div>





<div class="col-xs-12"> 



	<?php
//index.php
$connect = mysqli_connect("localhost","root","","atta"); 

$id = $_GET['edit_id'];

$query = "SELECT * FROM galleryimages where idd = $id";
$result = mysqli_query($connect, $query);
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <style>
   #box
   {
    width:600px;
    background:gray;
    color:white;
    margin:0 auto;
    padding:10px;
    text-align:center;
   }
  </style>


            <div class="box-content">

  <div class="container">
   <?php
   if(mysqli_num_rows($result) > 0)
   {
   ?>
   <div class="table-responsive"> 

       <h4 class="box-title">View Gallery Images</h4>
                
                 

    <table class="table table-bordered">
     <tr>
      <th>Name</th>
    
      <th>Delete</th>
     </tr>
   <?php
    while($row = mysqli_fetch_array($result))
    {
   ?>
     <tr id="<?php echo $row["id"]; ?>" >
      <td><img width="50px" src="../media/gallery/<?php echo $row["file_name"]; ?>"> <br> <?php echo $row["file_name"]; ?></td> 

   
    
      <td><input type="checkbox" name="id[]" class="delete_customer" value="<?php echo $row["id"]; ?>" /></td>
     </tr>
   <?php
    }
   ?>
    </table>
   </div>
   <?php
   }
   ?>
   <div align="center">
    <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">Delete</button>
   </div>
</div>

<script>
$(document).ready(function(){
 
 $('#btn_delete').click(function(){
  
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = [];
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
   });
   
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'ajaxdel/delete.php',
     method:'POST',
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });
   }
   
  }
  else
  {
   return false;
  }
 });
 
});
</script>














            </div>
        

			</div>



	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	




<?php include "allscripts.php"; ?>
