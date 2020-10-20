<?php
	include('header.php');
?>


<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >Add Tour</h2></CENTER>
                    <div class="card-body">
                        <form action= "tour_controller.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
								<label class="col-form-label">* Name</label>
								<input name="h_name" type="text" class="form-control" Required placeholder="">
                            </div>
							
							<div class="form-group">
								<label class="col-form-label">* Price Per Pax</label>
								<input name="price" type="text" class="form-control" Required placeholder="">
                            </div>
							
							
							<div class="form-group">
								<label for="">* Detail Description</label>
								<textarea name="desc" class="form-control" id="" Required rows="3"></textarea>
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">* Upload Main Image (400 X 300)</label>
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
								<input type="file" class="form-control" name="img7" >
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 8</label>
								<input type="file" class="form-control" name="img8" >
							</div>
							
							
							<div class="form-group">
								<label  class="col-form-label">Upload Picture 9</label>
								<input type="file" class="form-control" name="img9" >
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
							
							  
							<label  class="col-form-label">Amenities</label>
							<div class="row">
							  
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity1">
								</div>
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity2">
								</div>
							</div>
							<br>
							<div class="row">
							  
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity3">
								</div>
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity4">
								</div>
							</div>
							<br>
							<div class="row">
							  
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity5">
								</div>
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity6">
								</div>
							</div>
							<br>
							<div class="row">
							  
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity7">
								</div>
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity8">
								</div>
							</div>
							<br>
							<div class="row">
							  
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity9">
								</div>
								<div class="col">
								  <input type="text" class="form-control" placeholder="" name="amenity10">
								</div>
							</div>
							<br><br>
							<center><button class="btn btn-primary" type="submit" name="submit_from" >Submit form</button></center>
						
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
?>'