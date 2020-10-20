 <?php
    include("conn/db.php");
    
    
   
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

 </section>
</div>	
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; Powered By <a href="http://xcltechnologies.com/"> XCL Technologies</a> 2015-16</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $fb;?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $l_in;?>"><i class="fa fa-linkedin"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
   
	
	
    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript 
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
-->
	
	
    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>
