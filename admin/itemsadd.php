<?php
    include('header.php');
    include('../conn/db.php');
?>
 <script type="text/javascript">
		$(document).ready(function()
		{
			var i=1;
			$('.button').click(function(){
				$('.btn').after('<input type="text" class="row'+i+'">');
				i++;
			});
		});

</script>
<?php $query= mysqli_query($conn,"select * from restaurants");?>

<div class="dashboard-wrapper" > 
	<div class="container-fluid dashboard-content"> 
		<div class="row">
                 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;">Add Item Category</h2></CENTER>
                    <div class="card-body">
                        <form method="post" action="restaurants_controller.php?action=add_cat" >
                            
							<br>
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Category Name</span>
                                    </div>
                                <input type="text" class="form-control" name="cat_name" >
                               
                            </div>
							<br>
                            
                            <center><button class="btn btn-primary" type="submit" class="btn" name="submit" >Add Category</button></center>
						</form>
                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>              
     
                 
            
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;">All Category</h2></CENTER>
                    <div class="card-body">
                    <?php 					
							$sql = "Select * from `items_cat`";
							$data= mysqli_query($conn,$sql);
							
					?>
						<table class="table" style="border:2px solid #bbbbbb;padding:1px;text-align:center">
						  
						  <thead>
							<tr>
							  <th scope="col">Id</th>
							  <th scope="col">Name</th>
							  <th scope="col">Action</th>
							</tr>
						  </thead>
						  
						  <tbody>
					<?php while($row=mysqli_fetch_array($data)){  ?>
							  
							<tr>
							  
							  <td><?php echo $row['id']; ?></td>
							  <td><?php echo $row['cat_name']; ?></td>
							  <td><a href="restaurants_controller.php?action=delete_cat&id=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a></td>
							
							</tr>
							
					<?php  } ?>
					
						  </tbody>
					</table>
					
					
					</div>
                    <div class="card-body border-top"></div>
				</div>
            </div>
			
			

     
                 
                 
                        
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
					<center> <h2 class="card-header" style= "color:black;">Add Restaurant Item</h2></CENTER>
                    <div class="card-body">
                        <form method="post" action="restaurants_controller.php?action=add_item" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputState">Restaurant Name</label>
                                <select id="inputState" class="form-control" name="res">
                                    
                                        <?php while($row=mysqli_fetch_assoc($query)){?>    
                                        <option value="<?php echo $row['ID']?>"><?php echo $row['Name'];?></option>
                                        <?php }?>
                                </select>
                            </div>
							<div class="form-group" >
								<label for="inputState">Category</label>
                                <select id="inputState" class="form-control" name="cat_id">
                                    
                                        <?php 
											$query	= mysqli_query($conn,"select * from `items_cat`");
											while($row=mysqli_fetch_assoc($query)){
										?>    
											
											<option value="<?php echo $row['id']?>">  <?php echo $row['cat_name'];?></option>
											
                                        <?php }?>
                                </select>
                            </div>
							<br>
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Item And Price</span>
                                    </div>
                                <input type="text" class="form-control" name="item_name" placeholder="Item" >
                                <input type="text" class="form-control" name="price" placeholder="Price">
                            </div>
							<br>
                            <div class="input-group">
				<input type="File" class="form-control" name="image">
                            </div>
			<br>
                            <center><button class="btn btn-primary" type="submit" class="btn" name="submit" >Submit form</button></center>
						</form>
                    </div>
                    <div class="card-body border-top"></div>
				</div>
            </div>
                        
                        
						</form>
                                      

            </div>
					<div class="card-body border-top"></div>
                </div>
            </div>
                       
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submit'])){
        $id=$_POST['res'];
        $i1=$_POST['item1'];
        $p1=$_POST['price1'];
        $query=mysqli_query($conn,"insert into items values (null,'$i1','$p1','$id')");

    }
?>
<?php
	include('footer.php');
?>