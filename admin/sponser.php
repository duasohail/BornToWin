<?php
	include('header.php');
	include("../conn/db.php");
	


?>



<script>
									$('document').ready(function()
										{
											$('textarea').each(function(){
													$(this).val($(this).val().trim());
												}
											);
										});
								
								
								</script>

<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
          

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h2 class="card-header" style= "color:black;"   >Sponsers </h2></CENTER>
                    <div class="card-body">
                        <form action= "update.php" method="post"  enctype="multipart/form-data">
                            
							<div class="form-group">
								<label for="" class="col-form-label">Add Sponser Icon (200 x 50)</label>
								
								<input name="image" required value="<?php // echo $heading; ?>" type="file" class="form-control" >
								
								
                            </div>
                                           
                            
							<center><button class="btn btn-primary" type="submit" name="submit5">Add</button></center>

						</form>
                                      

            </div>
					<div class="card-body border-top"></div>
                </div>
            </div>
                        
                           
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >View Sliders</h2></CENTER>
                    <div class="card-body">
					
						<table id="myTable" class="table table-hover text-center" style="width:100%">
								<thead>
								
									<th style="text-align:center" >Slide</th>
									<th style="text-align:center" >Action</th>
									
								  
								</thead>
								<tbody>
								<?php 
								
									$stmt="SELECT * FROM sponser" ;
									$data= mysqli_query($conn,$stmt); 
								
								?>
								  <?php  while ($row= mysqli_fetch_array($data)){ ?> 
								  <tr>
									<td><img  src="<?php echo $row['image']; ?>" style="width:100px" /></td>
									</td>
									
									<td>
									    
									    <a href="update.php?slider_id=<?php echo $row['id']; ?>&action=delete" class="btn btn-danger">Delete</a>
							
									
									
									</td>
								  
								  </tr>
								  <?php  }  ?>
								</tbody>
								
								
								
						</table>
						
					
						
					
					</div>
                    <div class="card-body border-top"></div>
				</div>
            </div>



                       
        </div>
    </div>
</div>


<?php
	include('footer.php');
?>