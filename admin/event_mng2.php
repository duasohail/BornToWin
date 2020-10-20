<?php
	include("../conn/db.php");

	include('header.php');
?>'heaShort Descriptionhp');
?>


<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >Add Events</h2></CENTER>
                    <div class="card-body">
                        <form action= "event_controller.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
								<label class="col-form-label">* Title</label>
								<input name="title" type="text" class="form-control" Required placeholder="">
                            </div> 
							
							<div class="form-group">
								<label  class="col-form-label">* Short Description</label>
								<input name="s_desc" type="text" class="form-control" Required placeholder="">
							</div>
							
							<div class="form-group">
								<label for="">* Detail Description</label>
								<textarea name="desc" class="form-control" id="" Required rows="3"></textarea>
							</div>
							
							<div class="form-group">
								<label  class="col-form-label">* Upload Thumbnail Image (360 X 240)</label>
								<input type="file" class="form-control" name="image" Required id="fileToUpload">
							</div>
							

							<div class="form-group">
								<label  class="col-form-label">Upload Picture 1</label>
								<input type="file" class="form-control" name="img1" >
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 2</label>
								<input type="file" class="form-control" name="img2" >
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 3</label>
								<input type="file" class="form-control" name="img3" >
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 4</label>
								<input type="file" class="form-control" name="img4">
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 5</label>
								<input type="file" class="form-control" name="img5">
							</div>
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 6</label>
								<input type="file" class="form-control" name="img6">
							</div>
							
								<div class="form-group">
								<label  class="col-form-label">Upload Picture 7</label>
								<input type="file" class="form-control" name="img7">
							</div>
							
								<div class="form-group">
								<label  class="col-form-label">Upload Picture 8</label>
								<input type="file" class="form-control" name="img8">
							</div>
							
								<div class="form-group">
								<label  class="col-form-label">Upload Picture 9</label>
								<input type="file" class="form-control" name="img9">
							</div>
							
								<div class="form-group">
								<label  class="col-form-label">Upload Picture 10</label>
								<input type="file" class="form-control" name="img10">
							</div>
							
								<div class="form-group">
								<label  class="col-form-label">Upload Picture 11</label>
								<input type="file" class="form-control" name="img11">
							</div>
							
								<div class="form-group">
								<label  class="col-form-label">Upload Picture 12</label>
								<input type="file" class="form-control" name="img12">
							</div>
							
							
							
							
							<br>
							<center><button class="btn btn-primary" type="submit" name="submit_from" >Submit form</button></center>
						
						</form>
                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>

        </div>





		<div class="row">
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >All Events</h2></CENTER>
                    <div class="card-body">
                        

					<table class="table table-striped">
						<thead>
						<tr>
							<th>Thumbnail</th>
							<th>Title</th>
							<th>Short Description</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php $sql="Select * from events";
						
						$result = mysqli_query($conn, $sql);

						while($row = mysqli_fetch_assoc($result)) {

						
						?>
						<tr>
							<td><img src="../<?php echo $row['thumnail'] ?>" style="width:200px" /> </td>
							<td><?php echo $row['title'] ?></td>
							<td><?php echo $row['short_desc'] ?></td>
							<td><a href="add_articles.php?event_id=<?php echo $row['id']; ?>&action=delete_event"  class="btn btn-danger">Delete</a></td>
						</tr>

						<?php } ?>

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