<?php
	include('header.php');
	include("../conn/db.php");
	
	
	$sql = "Select * from `about`";
	$data= mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($data)){
		$heading = $row['name'];
		$desc = $row['value'];
	}
	
	$sql = "Select * from `footer`";
	$data2= mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($data2)){
		$address= $row['address'];
		$phone1 = $row['phone'];
		$mobile = $row['mobile'];
		$email1 = $row['email'];
		$mon_wed = $row['mon_wed'];
		$sat = $row['sat'];
		$fb = $row['fb'];
		$l_in = $row['l_in'];
		$google = $row['google'];
		$twitter = $row['twit'];
	}
	
	

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
					<center> <h2 class="card-header" style= "color:black;">Add Slider</h2></CENTER>
                    <div class="card-body">
                        <form action= "sliders.php?action=add" method="post" enctype="multipart/form-data">
                            <div class="form-group">
								<label for="inputText3" class="col-form-label">Slider(1920x1200)</label>
								<input name="image" required value="<?php // echo $heading; ?>" type="file" class="form-control" >
                            </div>
                                           
							<button class="btn btn-primary" type="submit" name="submit1" style="float:right">Add</button>
						
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
								
									$stmt="select * from sliders" ;
									$data= mysqli_query($conn,$stmt); 
								
								?>
								  <?php  while ($row= mysqli_fetch_array($data)){ ?> 
								  <tr>
									<td><img  src="../<?php echo $row['img']; ?>" style="width:100px" /></td>
									</td>
									
									<td>
									    
									    <a href="sliders.php?slider_id=<?php echo $row['id']; ?>&action=delete" class="btn btn-danger">Delete</a>
							
									
									
									</td>
								  
								  </tr>
								  <?php  }  ?>
								</tbody>
								
								
								
						</table>
						
					
						
					
					</div>
                    <div class="card-body border-top"></div>
				</div>
            </div>

            
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;"   >About BORN TO WIN</h2></CENTER>
                    <div class="card-body">
                        <form action= "update.php" method="post">
                            <div class="form-group">
								<label for="inputText3" class="col-form-label">Heading</label>
								<input name="heading" value="<?php echo $heading; ?>" type="text" class="form-control" >
                            </div>
                                           
							<div class="form-group">
								<label for="inputText3" class="col-form-label">Description</label>
								
								<textarea name="desc" class="form-control" id=""  rows="3"> <?php echo $desc; ?></textarea>
								
							</div>
							
							<center><button class="btn btn-primary" type="submit" name="submit1">Update</button></center>
						
						</form>
                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>

           
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <center> <h2 class="card-header" style= "color:black;"   >Footer </h2></CENTER>
                    <div class="card-body">
                        <form action= "update.php" method="post">
                             
                            <div class="form-group">
								<label f class="col-form-label">Address</label>
								<input name="address" type="text" value="<?php echo $address; ?>" class="form-control" >
                            </div>

							<div class="form-group">
								<label  class="col-form-label">Phone</label>
								<input name="phone" type="text" value="<?php echo $phone1; ?>" class="form-control" >
                            </div>
							
							<div class="form-group">
								<label  class="col-form-label">Mobile</label>
								<input name="mobile" type="text" value="<?php echo $mobile; ?>" class="form-control" >
                            </div>
							

                            <div class="form-group">
								<label class="col-form-label">Email</label>
								<input name="email" type="email" value="<?php echo $email1; ?>" class="form-control">
                            </div>
							
							<div class="form-group">
								<label  class="col-form-label">Working Day Monday to Thursday</label>
								<input name="mon_wed" type="text" value="<?php echo $mon_wed; ?>" class="form-control">
								
							</div>
							
							<div class="form-group">
								<label  class="col-form-label">Working Day Fridat to Saturday</label>
								<input name="sat" type="text" value="<?php echo $sat; ?>" class="form-control">
							</div>

							<div class="form-group">
								<label  class="col-form-label">Facebook Link</label>
								<input name="fb" type="text" value="<?php echo $fb; ?>" class="form-control">
							</div>

							<div class="form-group">
								<label  class="col-form-label">Linkedin Link</label>
								<input name="l_in" type="text" value="<?php echo $l_in; ?>" class="form-control">
							</div>

							<div class="form-group">
								<label  class="col-form-label">Google Link</label>
								<input name="google" type="text" value="<?php echo $google; ?>" class="form-control">
							</div>

							<div class="form-group">
								<label  class="col-form-label">Twitter Link</label>
								<input name="twit" type="text" value="<?php echo $twitter; ?>" class="form-control">
							</div>

							<center><button class="btn btn-primary" type="submit" name="submit2">Update</button></center>

						</form>
                                      

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