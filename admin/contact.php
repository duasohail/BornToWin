<?php
	include('header.php');
	include("../conn/db.php");
	


	
	$sql = "Select * from `contact`";
	$data2= mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($data2)){
		$name= $row['name'];
		$phone2 = $row['phone'];
		$email2 = $row['email'];
		$msg = $row['msg'];
		$details = $row['details'];
		
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
                    <center> <h2 class="card-header" style= "color:black;"   >Contact Us </h2></CENTER>
                    <div class="card-body">
                        <form action= "update.php" method="post">
                            
							<div class="form-group">
								<label for="" class="col-form-label">Contact details (maximum 70 Characters prefered)</label>
								
								<textarea name="about_us_details" class="form-control" rows="3"> <?php echo $details; ?></textarea>
								
								
                            </div>
                                           
                            <div class="form-group">
								<label f class="col-form-label">Name</label>
								<input name="name" type="text" value="<?php echo $name; ?>" class="form-control" >
                            </div>

							<div class="form-group">
								<label  class="col-form-label">Email</label>
								<input name="email" type="email" value="<?php echo $email2; ?>" class="form-control" >
                            </div>
							
                            <div class="form-group">
								<label class="col-form-label">Phone</label>
								<input name="phone" type="text" value="<?php echo $phone2; ?>" class="form-control">
                            </div>
							
							<div class="form-group">
								<label  class="col-form-label">Message</label>
								<textarea name="msg" class="form-control" rows="3"> <?php echo $msg; ?></textarea>
								
							</div>
							
							<center><button class="btn btn-primary" type="submit" name="submit3">Update</button></center>

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