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
					<h4 class="box-title">Edit Products</h4>
					<!-- /.box-title -->
					<div class="card-content">
						




<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT img,name,description,title,detail,price FROM products WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: servicesview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
            $name = $_POST['name'];
            $description = $_POST['description'];
           
            $title = $_POST['title'];
            
            $detail = $_POST['detail'];
            $price = $_POST['price'];
           

        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = '../media/products/'; // upload directory 
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
             $stmt = $DB_con->prepare('UPDATE products SET name=:name,img=:img,description=:description,title=:title,detail=:detail  WHERE id=:id');
            $stmt->bindParam(':name',$name);    
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':description',$description);
            
            $stmt->bindParam(':title',$title);
            
            $stmt->bindParam(':detail',$detail); 
             
            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='productsview.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>




  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 		                     <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6"> 

									  <img src="../media/products/<?php echo $img; ?>" height="70" width="150" />

                                <input type="file" name="user_image" accept="image/*" />

								<p class="help-block">Image should be 3527 x 2372 in pixels</p>
								</div>

							</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Name of products</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Title"  value="<?php echo $name; ?>">
								</div>
							</div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Short Detail</label>
                                <div class="col-sm-6">
                                    <input type="text" name="detail" class="form-control" id="" placeholder="Enter Date" required="" value="<?php echo $detail; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Title of products</label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="" value="<?php echo $title; ?>">
                                </div>
                            </div>

                           

                             
					
	                       <div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Description"> <?php echo $description; ?></textarea>  

                           <script>
                             CKEDITOR.replace( 'text', {
                              height: 300,
                              filebrowserUploadUrl: "upload.php"
                             });
                            </script>

    	                   
                                

								</div>
							</div>

                            


							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
									   <input class="btn btn-primary btn-sm waves-effect waves-light" type="submit"  name="btn_save_updates" value="Update" /> 

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



</div>





  <div class="main-content">


        <div class="col-lg-12 col-xs-12">
            <div class="panel panel-default border-panel ">
              <div  class="panel-wrapper collapse in">
                <div  class="panel-body" style="text-align: right;">
                  <div> 
                    <a  href="" id="add_button" data-target="#adddocumentmaster" 
                       data-toggle="modal"  class="btn btn-default btn-outline btn-icon right-icon">
                      <i class="fa fa-plus">
                      </i>
                      <span class="btn-text">Add Variant of Id = <?php echo $qq = $_GET['edit_id'] ?>
                      </span> 
                    </a>
                  </div> 
                </div>
              </div>
            </div>
        </div>
      
   
     <!--   <div class="col-lg-12 col-xs-12">
            <div class="panel panel-default border-panel ">
              <div  class="panel-wrapper collapse in">
                <div  class="panel-body" >
-->


                       <?php
                        error_reporting( ~E_NOTICE );                        
                        require_once 'dbconfig.php';                        
                        if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
                        {
                            $id = $_GET['edit_id'];
                            $stmt_edit = $DB_con->prepare('SELECT * FROM products WHERE id =:id');
                            $stmt_edit->execute(array(':id'=>$id));
                            $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
                            extract($edit_row);
                        }
                        else
                        {
                            header("Location: productsview.php");
                        }
                        ?>

                       <!-- <div class="col-md-2">

                       <img src="../media/products/<?php echo $img; ?>" height="70" width="150" />
                     </div>
                     <div class="col-md-10" style="    font-size: 20px;">
                      Product Name - <?php echo $name; ?> <br>
                    <br><b> Product Description </b>- <?php echo $description; ?> <br>
                     </div>

                </div>
              </div>
            </div>
        </div> -->




    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default border-panel card-view">
          <div class="panel-wrapper collapse in">
            <div class="panel-body">
              <div class="table-wrap">
                <table id="user_data" class="table table-bordered table-striped">
                  <thead>
                    <tr> <th width="1%">Sr.no</th> 
                    
                      <th width="2%">Qty</th>   
                      <th width="2%">Units</th>                   
                      <th width="1%">Mrp</th>  
                      <th width="1%">Discounted Price 
                      </th>
                      <th width="2%">P/R</th>   
                      <th width="1%">Edit
                      </th> <th width="1%">Delete
                      </th>


                     
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- adddocumentmaster -->


</div>

    <div id="adddocumentmaster" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        
        
        
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
            </button>
            <h5 class="modal-title">Create Accounts Sub Head Master
            </h5>
          </div>
          <div class="modal-body">  
              
            <div class="col-md-4">
            <img src="../media/products/<?php echo $img; ?>" height="auto" width="60" />
            </div>
                     <div class="col-md-8" style="    font-size: 20px;">
                      Product Name - <?php echo $name; ?> <br>
                     
                     </div>
            <form method="post" id="user_form" enctype="multipart/form-data">
               

                 <div class="form-group">
                <label for="message-text" class="control-label mb-10">Product Id
                </label>
                  <input readonly="" type="text" name="productid" id="productid" class="form-control" value="<?php echo $_GET['edit_id'] ?>" />
              </div>   


               <div class="form-group">
                <label for="message-text" class="control-label mb-10">Enter Qty 
                </label>
                  <input  type="text" name="type" id="type" class="form-control" value="" />
                </div>   
          
               <div class="form-group">
                <label for="message-text" class="control-label mb-10">Enter Units 
                </label>
                  <input  type="text" name="units" id="units" class="form-control" value="" />
                </div>   
        

              <div class="form-group">
                <label for="message-text" class="control-label mb-10">Enter MRP 
                </label>
                  <input type="text" name="mrp" id="mrp" class="form-control" />
              </div>    
              <div class="form-group">
                <label for="message-text" class="control-label mb-10">Enter Discounted Price 
                </label>
                  <input type="text" name="price" id="price" class="form-control" />
              </div>     
                
             <div class="form-group">
                <label for="message-text" class="control-label mb-10">Premium / Regular
                </label>
                  
                   <input type="text" name="pr" id="pr" class="form-control" />
              
              </div> 
              
              
              </div>
            <div class="modal-footer">
              <input type="hidden" name="id" id="id" />
              <input type="hidden" name="operation" id="operation" />
              <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
              <button type="button" class="btn btn-default" data-dismiss="modal">Close
              </button>
            </div>
            </form>
        </div>
      </div>
    </div>




	<!-- /Main Content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
</script>
<script type="text/javascript" language="javascript" >
  $(document).ready(function(){

    $('#add_button').click(function(){
      $('#user_form')[0].reset();
      $('.modal-title').text("Add Accounts Title ");
      $('#action').val("Add");
      $('#operation').val("Add");
    });

    var dataTable = $('#user_data').DataTable({
      "processing":true,
      "serverSide":true,
      "order":[],
      "ajax":{
        url:"onetime/accountsdailyexpensesfetch.php?q=<?php echo $qq; ?>",
        type:"POST"
      }
      ,
      "columnDefs":[
        {
          "targets":[0],
          "orderable":false,
        }
        ,
      ],
    }
                                             );
    $(document).on('submit', '#user_form', function(event){
      event.preventDefault();
      var type = $('#type').val(); 

       var productid  = $('#productid').val(); 
       var price  = $('#price').val(); 
       var units  = $('#units').val(); 

       var pr  = $('#pr').val(); 

       
       var mrp  = $('#mrp').val(); 



      if(type != ''  && productid != ''  && price != '')
      {
        $.ajax({
          url:"onetime/accountsdailyexpensesinsert.php",
          method:'POST',
          data:new FormData(this),
          contentType:false,
          processData:false,
          success:function(data)
          {
            alert(data);
            $('#user_form')[0].reset();
            $('#adddocumentmaster').modal('hide');
            dataTable.ajax.reload();
          }
        }
              );
      }
      else
      {
        alert("Both Fields are Required");
      }
    }
                  );
    $(document).on('click', '.update', function(){
      var id = $(this).attr("id");
      $.ajax({
        url:"onetime/accountsdailyexpensesfetch_single.php",
        method:"POST",
        data:{
          id:id}
        ,
        dataType:"json",
        success:function(data)
        {
          $('#adddocumentmaster').modal('show');
          $('#type').val(data.type);     
          $('#units').val(data.units);   

             $('#productid ').val(data.productid );
             $('#price ').val(data.price );
             $('#mrp ').val(data.mrp );
             $('#pr ').val(data.pr );


          $('.modal-title').text("Edit Accounts Title");
          $('#id').val(id);
          $('#action').val("Save");
          $('#operation').val("Edit");
        }
      }
            )
    }
                  );
    $(document).on('click', '.delete', function(){
      var id = $(this).attr("id");
      if(confirm("Are you sure you want to delete this?"))
      {
        $.ajax({
          url:"onetime/accountsdailyexpensesdelete.php",
          method:"POST",
          data:{
            id:id}
          ,
          success:function(data)
          {
            alert(data);
            dataTable.ajax.reload();
          }
        }
              );
      }
      else
      {
        return false;
      }
    }
                  );
  }
                   );
</script>
<!-- jQuery -->
<?php include "allscripts.php"; ?>
