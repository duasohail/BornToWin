<?php
	include('header.php');
	include("../conn/db.php");

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
	</script>


<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;" >View Room</h2></CENTER>
                    <div class="card-body">
					
						<table id="myTable" class="table table-hover text-center" style="width:100%">
								<thead>
								
									<th style="text-align:center" >Hotel Name</th>
									<th style="text-align:center" >Category</th>
									<th style="text-align:center" >NO: Beds</th>
									<th style="text-align:center" >Price</th>
									<th style="text-align:center" >Edit Option</th>
									<th style="text-align:center" >Delete Option</th>
									
								  
								</thead>
								<tbody>
								<?php 
								
									$stmt="select * from `rooms`" ;
									$data= mysqli_query($conn,$stmt); 
								
								?>
								  <?php  while ($row= mysqli_fetch_array($data)){ ?> 
								  <tr>
								  <td><?php $rwo = mysqli_fetch_array(mysqli_query($conn,"select * from `hotel_sehwan` where `id` = '{$row['hotel_id']}' "));  echo $rwo['hotel_name'] ?></td>
									<td><?php  $rwo = mysqli_fetch_array(mysqli_query($conn,"select * from `room_cat` where `id` = '{$row['room_cat_id']}' "));  echo $rwo['cat_name']; ?></td>
									<td><?php echo $row['num_of_beds']; ?></td>
									<td><?php echo $row['price']; ?>Rs</td>
									
									<td>
										<form action="edit_rooms.php" method="POST">
											<input type="hidden" name="room_id" value="<?php echo $row['id']; ?>" />
											<button type="submit" class="btn btn-success">Edit</button>
										</form>
									</td>
									
									
									<td><form action="room_controller.php" method="POST">
										<input type="hidden" name="action" value="delete_room">
										<input type="hidden" name="room_id" value="<?php echo $row['id']; ?>">
										<button type="submit" class="btn btn-danger">Delete</button>
									</form></td>
								  
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