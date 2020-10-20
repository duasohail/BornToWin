<?php
	include('header.php');
		include("../conn/db.php");

?>



<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >Update Images</h2></CENTER>
                    <div class="card-body">
                        <form action= "sliders.php" method="post" enctype="multipart/form-data">
                            
							
							<div class="form-group">
								<label  class="col-form-label">* Upload Thumbnail Image (275 X 275)</label>
							</div>
							

							<div class="form-group">
								<label  class="col-form-label">Upload Picture 1</label>
								<input type="file" class="form-control" name="img1" >
							</div>
							
							<br>
							<button class="btn btn-primary" type="submit" name="submit_img1" >Update</button>
						
						</form>
							
							<form action= "sliders.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 2</label>
								<input type="file" class="form-control" name="img2" >
							</div>
							<br>
							<button class="btn btn-primary" type="submit" name="submit_img2" >Update</button>
						
						</form>
							
							<form action= "sliders.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 3</label>
								<input type="file" class="form-control" name="img3" >
							</div>
							<br>
							<button class="btn btn-primary" type="submit" name="submit_img3" >Update</button>
						
						</form>
							
							<form action= "sliders.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 4</label>
								<input type="file" class="form-control" name="img4" >
							</div>
							<br>
							<button class="btn btn-primary" type="submit" name="submit_img4" >Update</button>
						
						</form>
							
							
							<form action= "sliders.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 5</label>
								<input type="file" class="form-control" name="img5" >
							</div>
							<br>
							<button class="btn btn-primary" type="submit" name="submit_img5" >Update</button>
						
						</form>


							<form action= "sliders.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 6</label>
								<input type="file" class="form-control" name="img6" >
							</div>
							<br>
							<button class="btn btn-primary" type="submit" name="submit_img6" >Update</button>
						
						</form>
						
                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>

        </div>

               
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >View Updated Gallery</h2></CENTER>
                    <div class="card-body">
					
						<table id="myTable" class="table table-hover text-center" style="width:100%">
								<thead>
								
									<th colspan="6" style="text-align:center" >Slider</th>
									
								  
								</thead>
								<tbody>
								<?php 
								
									$stmt="select * from gallery" ;
									$data= mysqli_query($conn,$stmt); 
								
								?>
								  <?php $i=1; while ($row= mysqli_fetch_array($data)){ ?> 
								  
									<td><?php echo $i." ";?><img src="<?php echo $row['image']; ?>" style="width:70px" /></td>
									</td>
									
								  
								 
								  <?php  $i++; }  ?>
								</tbody>
								
								
								
						</table>
						
					
						
					
					</div>
                    <div class="card-body border-top"></div>
				</div>
            </div>




		<div class="row">
                        
           

        </div>
    </div>
</div>


<?php
	include('footer.php');
?>