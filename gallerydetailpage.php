<?php include"allcss.php"; ?>


	<?php include"header.php"; ?>

        <!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header bg_img padding-tb">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-header-content-area"><Br><br><br><br>
                	   <?php include "admin/db.php"; ?><?php
               
    				$id = $_GET['q'];
                    $query=mysqli_query($con,"SELECT g.title, gi.file_name, gi.id FROM `galleryimages` gi, gallery g WHERE gi.idd = g.id and  gi.idd = $id limit 1");

                     while($row=mysqli_fetch_array($query)){
                     	echo ' <h4 class="ph-title">'.$row['title'].'</h4>'; 
                     }
                     ?>

                   
                    <ul class="agri-ul">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="active">Gallery </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
		
        <!-- product section start here -->
		<div class="product-section grid-2 padding-tb">
			<div class="container">
				<div class="section-wrapper">
					<div class="row justify-content-center">
                    <?php include "admin/db.php"; ?>
					<?php
               
    				$id = $_GET['q'];
                    $query=mysqli_query($con,"SELECT g.title, gi.file_name, gi.id FROM `galleryimages` gi, gallery g WHERE gi.idd = g.id and  gi.idd = $id");

                    $count = 1;
                    while($row=mysqli_fetch_array($query)){
                    
					echo '      	<div class="col-md-6 col-12">
                                            <div class="product-item">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                         <a href="gallerydetailpage.php?q='.$row['id'].'"> <img class="img-fluid" src="media/gallery/'.$row['file_name'].' " alt="image"></a>
                                                    </div>
                                                    <div class="product-content">
                                                        <a href="gallerydetailpage.php?q='.$row['id'].'" class="product-name">'.$row['title'].'</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ';}?>

					</div>
				</div>
			</div>
		</div>
		<!-- product section ending here -->
 
        
		<!-- footer section start here -->
	<?php include"footer.php"; ?>


		
	<?php include"allscript.php"; ?>
