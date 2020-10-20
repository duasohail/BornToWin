<?php 
	include("../conn/db.php");

//print_r($_POST);
ob_start();

//echo $target_file = $target_dir . basename($_FILES["main_img"]["name"]);


$main_img = $img1 = $img2 = $img3 = $img4 = $img5 = $img6 = $img7 = $img8 = $img9 = $img10 = $img11 = $img12 = null;


/** Main Image **/
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
		$main_img = "img/tour_img/main_images/".$file_name_new;
        move_uploaded_file($file_tmp,"../img/tour_img/main_images/".$file_name_new);
      }else{
        print_r($errors);
      }
	  
   }


/** Image One **/
if(!empty($_FILES['img1'])){
      $errors= array();
      $file_name = $_FILES['img1']['name'];
      $file_size = $_FILES['img1']['size'];
      $file_tmp = $_FILES['img1']['tmp_name'];
      $file_type = $_FILES['img1']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
      	$img1 = "img/tour_img/other_images/".$file_name_new;
		move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
        echo "Success";
      }else{
         print_r($errors);
      }
	  
   }
  
  
/** Image Two **/   
if(!empty($_FILES['img2'])){
      $errors= array();
      $file_name = $_FILES['img2']['name'];
      $file_size = $_FILES['img2']['size'];
      $file_tmp = $_FILES['img2']['tmp_name'];
      $file_type = $_FILES['img2']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img2 = "img/tour_img/other_images/".$file_name_new;
   
		move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
	  
   }
   
  
/** Image Three **/   
if(!empty($_FILES['img3'])){
      $errors= array();
      $file_name = $_FILES['img3']['name'];
      $file_size = $_FILES['img3']['size'];
      $file_tmp = $_FILES['img3']['tmp_name'];
      $file_type = $_FILES['img3']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img3 = "img/tour_img/other_images/".$file_name_new;

		 move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
	  
   }
   
   
/** Image Four **/   
if(isset($_FILES['img4'])){
      $errors= array();
      $file_name = $_FILES['img4']['name'];
      $file_size = $_FILES['img4']['size'];
      $file_tmp = $_FILES['img4']['tmp_name'];
      $file_type = $_FILES['img4']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
        $img4 = "img/tour_img/other_images/".$file_name_new;

		move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
        echo "Success";
      }else{
         print_r($errors);
      }
	  
   }
   

/** Image Five **/   
if(isset($_FILES['img5'])){
      $errors= array();
      $file_name = $_FILES['img5']['name'];
      $file_size = $_FILES['img5']['size'];
      $file_tmp = $_FILES['img5']['tmp_name'];
      $file_type = $_FILES['img5']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img5 = "img/tour_img/other_images/".$file_name_new;
		  
         move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
		echo "Success";
      }else{
         print_r($errors);
      }
	  
}
   
    
/** Image Six **/   
if(isset($_FILES['img6'])){
      $errors= array();
      $file_name = $_FILES['img6']['name'];
      $file_size = $_FILES['img6']['size'];
      $file_tmp = $_FILES['img6']['tmp_name'];
      $file_type = $_FILES['img6']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img6 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
	  
}
   
   
/** Image Seven **/   
if(isset($_FILES['img7'])){
      $errors= array();
      $file_name = $_FILES['img7']['name'];
      $file_size = $_FILES['img7']['size'];
      $file_tmp = $_FILES['img7']['tmp_name'];
      $file_type = $_FILES['img7']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img7 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
      
}
   


/** Image Eight **/   
if(isset($_FILES['img8'])){
      $errors= array();
      $file_name = $_FILES['img8']['name'];
      $file_size = $_FILES['img8']['size'];
      $file_tmp = $_FILES['img8']['tmp_name'];
      $file_type = $_FILES['img8']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img8 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
      
}
   
   

/** Image Nine **/   
if(isset($_FILES['img9'])){
      $errors= array();
      $file_name = $_FILES['img9']['name'];
      $file_size = $_FILES['img9']['size'];
      $file_tmp = $_FILES['img9']['tmp_name'];
      $file_type = $_FILES['img9']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img9 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
      
}
   
   
/** Image ten **/   
if(isset($_FILES['img10'])){
      $errors= array();
      $file_name = $_FILES['img10']['name'];
      $file_size = $_FILES['img10']['size'];
      $file_tmp = $_FILES['img10']['tmp_name'];
      $file_type = $_FILES['img10']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img10 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
      
}
   
  
   
/** Image eleven **/   
if(isset($_FILES['img11'])){
      $errors= array();
      $file_name = $_FILES['img11']['name'];
      $file_size = $_FILES['img11']['size'];
      $file_tmp = $_FILES['img11']['tmp_name'];
      $file_type = $_FILES['img11']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img11 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
      
}
    
   
/** Image twelve **/   
if(isset($_FILES['img12'])){
      $errors= array();
      $file_name = $_FILES['img12']['name'];
      $file_size = $_FILES['img12']['size'];
      $file_tmp = $_FILES['img12']['tmp_name'];
      $file_type = $_FILES['img12']['type'];
      $file_ext = strtolower(end(explode('.',$file_name)));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $arry=explode(".",$file_name);
	  
	  $file_name_new = $arry[0].time().".".$file_ext;
	  
	  //$file_name = $file_name.time();
      
      if(empty($errors)==true) {
         $img12 = "img/tour_img/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
      }
      
}
       
   
   
   
   
   
   
   
   

 $sql1 = "INSERT INTO `hotel_tour` (img_dir, name, price) VALUES ('$main_img', '{$_POST['h_name']}', '{$_POST['price']}')";

 mysqli_query($conn, $sql1);   
 $last_id = mysqli_insert_id($conn);



	echo $sql2 = "INSERT INTO `tour_detail` (`hotel_id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `hotel_name`, `amenties1`, `amenties2`, `amenties3`, `amenties4`, `amenties5`, `amenties6`, `amenties7`, `amenties8`, `amenties9`, `amenties10`, `description`) VALUES ('$last_id', '$img1', '$img2', '$img3', '$img4', '$img5', '$img6', '$img7', '$img8', '$img9', '$img10', '$img11', '$img12', '{$_POST['h_name']}','{$_POST['amenity1']}','{$_POST['amenity2']}','{$_POST['amenity3']}','{$_POST['amenity4']}','{$_POST['amenity5']}','{$_POST['amenity6']}','{$_POST['amenity7']}','{$_POST['amenity8']}','{$_POST['amenity9']}','{$_POST['amenity10']}','{$_POST['desc']}')";
	mysqli_query($conn, $sql2);   


	header("Location: index.php");


 ob_end_flush();


   
?>