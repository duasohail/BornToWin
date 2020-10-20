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
                        <form method="post" action="lhc_controller.php?action=add_stuff" enctype="multipart/form-data">
                            
							
							<div class="form-group">
								<label for="">Review</label>
								<textarea name="text" class="form-control" id="" Required rows="3"></textarea>
							</div>
							
							<div class="form-group">
								<label  class="col-form-label">* Upload Image(900x600)</label>
								<input type="file" class="form-control" name="image" >
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
							$sql = "Select * from `light_hearted_clients`";
							$data= mysqli_query($conn,$sql);
							
					?>
						<table class="table" style="border:2px solid #bbbbbb;padding:1px">
						  
						  <thead>
							<tr>
							  <th scope="col">Text</th>
							  <th scope="col">Image</th>
							  <th scope="col">Action</th>
							</tr>
						  </thead>
						  
						  <tbody>
					<?php while($row=mysqli_fetch_array($data)){  ?>
							  
							<tr>
							  
							  <td><?php echo $row['text']; ?></td>
							  <td><img src="../<?php echo $row['img'] ?>" style="width:100px"/></td>
							  <td><a href="lhc_controller.php?action=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a></td>
							
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