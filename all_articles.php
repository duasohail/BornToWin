<?php include("header.php") ?>


    <div class="container" style="margin-top:15%">
        <div class="row">
                    <?php    
                        $sql="select * from `articles` ";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                             //print_r($row);
                    ?>       
                        
                    
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="latest-post">
                            <img src="BORN_TO_WIN/<?php echo $row['image']; ?>"  class="img-responsive" alt="">
                            <h4><a href="#"><?php echo $row['title'] ?></a></h4>
                            
                            <p><?php echo $row['s_description'] ?></p>
                            <a href="article_detail.php?id=<?php echo $row['id']   ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

                        <?php } ?>

</div>
</div>
           
<?php include('footer.php'); ?>