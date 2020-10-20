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
                        $sql="select * from `events` where id = $id ";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        
                    ?>       

            <div class="col-md-12">
            <center><h2><?php echo $row['title'] ?></h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-9">
                <p style="text-align:justify" ><?php echo $row['desc'] ?></p>

            </div>

            <div class="col-md-3">
            <img src="<?php echo $row['thumnail'] ?>" style="width:100%" />

            </div>
        </div>

    <div class="row">
           
           <?php if(isset($row['img1'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img1'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img1'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img2'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img2'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img2'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img3'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img3'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img3'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img4'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img4'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img4'] ?>" />
                </a>
            </div>
            <?php } ?>

            


            <?php if(isset($row['img5'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img5'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img5'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img6'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img6'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img6'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img7'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img7'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img7'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img8'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img8'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img8'] ?>" />
                </a>
            </div>
            <?php } ?>





            <?php if(isset($row['img9'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img9'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img9'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img10'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img10'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img10'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img11'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img11'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img11'] ?>" />
                </a>
            </div>
            <?php } ?>

            <?php if(isset($row['img12'])){ ?>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo $row['img12'] ?>">
                    <img class="img-responsive" alt="" src="<?php echo $row['img12'] ?>" />
                </a>
            </div>
            <?php } ?>


            
            
           
    </div>


    <?php include("footer.php") ?>
  
    <script>
$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
    </script>