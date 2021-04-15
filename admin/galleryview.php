<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>


<?php include "allcss.php" ?>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script language="JavaScript" type="text/javascript">
            $(document).ready(function() {
                $("a.delete").click(function(e) {
                    if (!confirm('Are you sure?')) {
                        e.preventDefault();
                        return false;
                    }
                    return true;
                });
            });
        </script>
<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">View Gallery</h4>
				
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Id</th> 
								<th>Image</th>
								<th>Gallery Name</th>
								
							
<th>Action</th> 
							</tr>
						</thead>
					
						<tbody>
								<?php 
								include('db.php');
/* code for data delete */
if(isset($_GET['del']))
{
	
    $SQL = mysqli_query($con,"DELETE FROM galleryimages WHERE idd=".$_GET['del']);
   
    $SQL = mysqli_query($con,"DELETE FROM gallery WHERE id=".$_GET['del']);

 ?>
                <script>
                alert('Successfully Deleted ...');
                window.location.href='galleryview.php';
                </script>
                <?php

}
/* code for data delete */

$result = mysqli_query($con,"SELECT * FROM gallery order by id desc"); 

 $tmpCount = 1;

while($row = mysqli_fetch_array($result))
{

echo '

					
							<tr>
								  ';?>
                                                    <td>
                                                        <?php echo $tmpCount++ ?>
                                                    </td>
                                                    <?php echo '
						 
						 <td><img width="150px" src="../media/gallery/'.$row['img'].'"/></td>

								<td>'.$row['title'].'</td>
							
 
						
    <td>
  
  <a href="galleryedit.php?edit_id='.$row['id'].'">
   <button type="button" class="btn btn-primary waves-effect waves-light btn-xs"> <i class="fa fa-pencil"></i></button>
  </a>




  <a  class="delete" href="?del='.$row['id'].'"> 
  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
   </a>
       
        </td> 


							</tr>

						


							'; } ?>

						</tbody>
					</table>
				</div>
				<!-- /.box-content -->
			</div>
		
			<!-- /.col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->		
		
	</div>
	<!-- /.main-content -->
</div>
<!-- ACTIVE AND INACTIVE KA CODE -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
  var current_element = $(this);
  url = "productajax.php";
  $.ajax({
  type:"POST",
  url: url,
  data: {id:$(current_element).attr('data'),status:status},
  success: function(data)
    {   
      location.reload();
    }
  });
  }      
});
</script>

     <!-- ACTIVE AND INACTIVE KA CODE -->  

<?php include "allscripts.php"; ?>
