<?php include("header.php") ?>


    <div class="container" style="margin-top:15%">
        <div class="row">
                    <?php    
                        $sql="select * from `events` ";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                             //print_r($row);
                    ?>       
                        
                    
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="latest-post">
                            <img src="<?php echo $row['thumnail'] ?> " class="img-responsive" alt="">
                            <h4><a href="event.php?id=<?php echo $row['id']  ?>"><?php echo $row['title'] ?></a></h4>
                            <div class="post-details">
                            </div>
                            <p><?php echo $row['short_desc'] ?></p>
                            <a href="event.php?id=<?php echo $row['id']  ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

                        <?php } ?>




			
			
			
       </div>
    </div>
	
	<?php include('footer.php'); ?>