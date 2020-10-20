<?php
    include('header.php');
    include('../conn/db.php');
?>

<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
            
			
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;">Add Stuff</h2></CENTER>
                    <div class="card-body">
                        <form method="post" action="testimonial_controller.php?action=add_stuff" enctype="multipart/form-data">
                            
							
							<div class="form-group">
								<label for="">Video URL</label>
								<input type="text" required class="form-control" name="url" >
							</div>
							
							<div class="form-group">
								<label  class="col-form-label">Upload Thumbnail</label>
								<input type="file" required class="form-control" name="image" >
							</div>
						
							
							
							<br><br>
							<center><button class="btn btn-primary" type="submit" name="submit">Add</button></center>
						
						</form>
                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>
			
			<hr>
			
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;">All Previous Stuff</h2></CENTER>
                    <div class="card-body">
                    <?php 					
							$sql = "Select * from `testimonial`";
							$data= mysqli_query($conn,$sql);
							
					?>
						<table class="table" style="border:2px solid #bbbbbb;padding:1px">
						  
						  <thead>
							<tr>
							  <th scope="col">Thumbnail</th>
							  <th scope="col">URL</th>
							  <th scope="col">Action</th>
							</tr>
						  </thead>
						  
						  <tbody>
					<?php while($row=mysqli_fetch_array($data)){  ?>
							  
							<tr>
							  
							  <td><img src="../<?php echo $row['img']; ?>" style="width:100px" /></td>
							  
							  <td><?php echo $row['video_url']; ?></td>
							  <td><a href="testimonial_controller.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a></td>
							
							</tr>
							
					<?php  } ?>
					
						  </tbody>
					</table>
					
					
					</div>
                    <div class="card-body border-top"></div>
				</div>
            </div>
			
			
			
			
			
			
			
        </div>

		<div class="card-body border-top"></div>
    

		</div>
    </div>
</div>
<?php

   

?>

<?php
	include('footer.php');
?>