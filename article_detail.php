<?php include("header.php") ?>

<!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<style>
  


  .gallery
{
    display: inline-block;
    margin-top: 20px;
}
</style>

    <div class="container" style="margin-top:10%">
        <div class="row">
                   <?php    
                        $id= $_GET['id'];
                        $sql="select * from `articles` where id = $id ";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        
                    ?>       

            <div class="col-md-12">
            <center><h2><?php echo $row['title'] ?></h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-9">
                <p style="text-align:justify" ><?php echo $row['l_description'] ?></p>

            </div>

            <div class="col-md-3">
            <img src="BORN_TO_WIN/<?php echo $row['image']; ?>" style="width:100%" />

            </div>
        </div>

   

         <?php include("footer.php") ?>    
            
   