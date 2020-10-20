<?php include("header.php") ?>


    
    
    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            
            
            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/marathon.jpg" alt="slider">
                     <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                              <span>Welcome to <strong>Born To Win</strong></span>
                            </h1>
                            <!--ass="animated2">Generate a flood of new business with the<br> power of a digital media platform</p>-->
                            <!--href="#feature" class="page-scroll btn btn-primary animated3">Read More</a>-->
                        </div>
                    </div>
                </div>    <!--/ Carousel item end -->
                
                 <?php 
                include( "conn/db.php");

                 $sql = "SELECT * FROM sliders";
                 $data= mysqli_query($conn,$sql);
              
while ($row = mysqli_fetch_assoc($data)) {

//print_r($row);

  
 
                ?>
                <div class="item">
                    <img class="img-responsive" src="<?php echo $row['img']; ?>" alt="slider">
                    
                  
                </div>
                <?php } ?>
                
                <!--/ Carousel item end -->
                
                
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

   <?php
   $sql = "Select * from `about`";
    $data= mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($data)){
        $heading = $row['name'];
        $desc = $row['value'];
    }
    ?>
     <!-- Start About Us Section -->
    <section id="about-us" class="pricing-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center" >
                            <h3 style="color:white" >About Us</h3>
                        </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-12 text-center" style="color:white">
                   
                        
                        <div class="border"></div><br>
                        <p align="center"><?php echo $desc;?></p>
                   
                </div>
                
                
                
            </div><!-- /.row -->            
            
        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->

	

    <!-- Start Team Member Section -->
    <section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Gallery</h3>
                            <hr width="70%">
                        </div>
                </div>
            </div>
            
            <div class="row">

                <div class="col-md-12">
                    <div id="team-section">
                

                                <div class="our-team">
                                    <?php 
                include( "conn/db.php");

                 $sql = "SELECT * FROM gallery";
                 $data= mysqli_query($conn,$sql);
              
while ($row = mysqli_fetch_assoc($data)) {

//print_r($row);

  
 
                ?>

                                    <div class="team-member">
                                        <img src="BORN_TO_WIN/<?php echo $row['image']; ?>" class="img-responsive"  alt="">
                                       
                                    </div><?php }?>

                                    


                                </div>

                    
                    </div>
                </div>
            </div>
                
        </div>
    </section>
    <!-- End Team Member Section -->



    <!-- Start Pricing Table Section -->
    <div id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Articles</h3>
                            <hr width="70%" >
                           <br>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="row">
                
                        
                <div class="pricing">
                        

 <?php 
                include( "conn/db.php");

                 $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 6";
                 $data= mysqli_query($conn,$sql);
              
while ($row = mysqli_fetch_assoc($data)) {

//print_r($row);
                ?>
 <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
                                    <h3><b><?php echo $row['title'];?></b></h3>
                                </div>
                                <br>
                                    <img src="BORN_TO_WIN/<?php echo $row['image']; ?>" width="200px" height="170px"/>                                   
                                <center><hr width="70%"></center>
                                <div>
                                    <?php $string=$row['s_description']; ?>
                                    <p style="text-align:left; padding:10px;"><?php echo $string;?></p>
                                </div>
                                <div class="plan-signup">
                                    <a href="article_detail.php?id=<?php echo $row['id']; ?>" class="btn-system btn-small">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        
                      <?php  }

                ?>


                    </div>
						<br>
					<p align="center" ><a href="all_articles.php">View All</a></p>
            </div>
        </div>
    </div>

    <!-- End Pricing Table Section -->
    
    
    
    <!-- Start Latest News Section -->
    <section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Events</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <?php    
                             $sql="select * from `events` ";
                             $result = mysqli_query($conn, $sql);
                             while($row = mysqli_fetch_assoc($result)) {
                             //print_r($row);
                    ?>       
                    
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="<?php echo $row['thumnail'] ?> " class="img-responsive" alt="" style="width:360px;height:240px">
                            <h4><a href="event.php?id=<?php echo $row['id']  ?>"><?php echo $row['title'] ?></a></h4>
                            <div class="post-details">
                                
                            </div>
                            <p><?php echo $row['short_desc'] ?></p>
                            <a href="event.php?id=<?php echo $row['id']  ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>

                    <?php   }  ?>
                    
                    
                    
                </div>

            </div>


            <a href="all_events.php" class="btn btn-secondary" style="float:right" >View All</a>
        </div>
    </section>
    <!-- End Latest News Section -->


 
    

    <!-- Clients Aside -->
    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Our Honourable Sponsers</h3>
                        <p>Born To Win Pkistan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">
                    <?php 
                                
                                    $stmt="SELECT * FROM sponser" ;
                                    $data= mysqli_query($conn,$stmt); 
                                while ($row= mysqli_fetch_array($data)){ ?> 
                    <div class="col-md-12">
                        <img src="BORN_TO_WIN/<?php echo $row['image']; ?>" class="img-responsive" alt="...">
                    </div>
                    <?php } ?>
                    
                    <div class="col-md-12">
                        <img src="BORN_TO_WIN/<?php echo $row['image']; ?>" class="img-responsive" alt="...">
                    </div>
                    
                   
                    
                </div>
            </div>
        </div>
    </section>
    
    
      



    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                       <hr width="30%"><br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action= "admin/update.php" method="post" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name *"  required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email *"  required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="msg" placeholder="Your Message *"  required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-primary" type="submit" name="submit3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <?php 
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
                        <ul>
                            <li><strong>E-mail :</strong><?php echo " ".$email1;?> </li>
                            <li><strong>Phone :</strong><?php echo " ".$phone1;?>  </li>
                            <li><strong>Mobile :</strong><?php echo " ".$mobile;?> </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-thurs :</strong><?php echo " ".$mon_wed;?></li>
                            <li><strong>Fri-sat :</strong> <?php echo " ".$sat;?></li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      
    

    <?php include("footer.php") ?>
