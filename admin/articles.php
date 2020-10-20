<?php
	include('header.php');
	include("../conn/db.php");
	
	
	$sql = "Select * from `articles`";
	$data= mysqli_query($conn,$sql);
	while($row= mysqli_fetch_array($data)){
		$head = $row['title'];
		$img=$row['image'];
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
					<center> <h2 class="card-header" style= "color:black;">Add Articles 1</h2></CENTER>
                    <div class="card-body">
                        <form action= "add_articles.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
								<label class="col-form-label">Image</label>
								<input name="img" required  type="file" class="form-control" >
								<!--<div><img src="<?php echo $img;?>"></div>-->

								<label class="col-form-label">Title</label>
								<input name="head1" required value="" type="text" class="form-control" >

								<label class="col-form-label">Short 2 lines Description which shows on main page</label>
								<input name="desc1" required  type="text" class="form-control" >
                           
								<label class="col-form-label">Description</label>
								<textarea name="desc2" id="description" class="form-control"></textarea>
                            </div>
                                           
							<button class="btn btn-primary" type="submit" name="submit1" style="float:right">Update</button>
						
						</form>

                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                	<center>
                		<div class="card-body">
                			<table id="myTable" class="table table-hover text-center" style="width:100%">
                				<thead>
                					<th style="text-align:center" >Image</th>
									<th style="text-align:center" >Title</th>
									<th style="text-align:center" >Action</th>
                				</thead>

                				<tbody>
                					<?php 
								
									$stmt="select * from articles" ;
									$data= mysqli_query($conn,$stmt); 
								
								?>
								  <?php  while ($row= mysqli_fetch_array($data)){ ?> 
								  <tr>
									<td><img  src="<?php echo $row['image']; ?>" style="width:100px" /></td>
									<td><?php echo $row['title']; ?></td>
									</td>
									
									<td>
									    
									    <a href="add_articles.php?articles_id=<?php echo $row['id']; ?>&action=delete" class="btn btn-danger">Delete</a>
							
									
									
									</td>
								  
								  </tr>
								  <?php  }  ?>
                				</tbody>

                			</table>
                		</div>
                	</center>


                	<div class="card-body border-top"></div>
                </div>

            </div>



        </div>
    </div>
</div>


<?php
	include('footer.php');
?>

