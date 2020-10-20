<?php 
	include("../conn/db.php");
	 ob_start();
if($_REQUEST['action'] == 'delete_hotel' ){
	
	$sql = "DELETE FROM `hotel_sehwan` WHERE `id` = '{$_POST['hotel_id']}'";
	mysqli_query($conn, $sql);
	$sql2 = "DELETE FROM `hotel_detaill` WHERE `hotel_id` = '{$_POST['hotel_id']}'";
	mysqli_query($conn, $sql2);	
	header("Location: view_hotels.php");	
}



if($_REQUEST['action'] == 'Edit_form'){
	
	
	$main_img = $img1 = $img2 = $img3 = $img4 = $img5 = $img6 = $img7 = $img8 = $img9 = $img10 = $img11 = $img12 = null;

	/** Main Image **/
	if(!empty($_FILES['image'])){
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
		$main_img = "img/hotel_images/main_images/".$file_name_new;
		move_uploaded_file($file_tmp,"../img/hotel_images/main_images/".$file_name_new);
	  }else{
		//print_r($errors);
		echo $main_img = $_POST['image_hidden'];
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
			$img1 = "img/hotel_images/other_images/".$file_name_new;
			move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
			echo "Success";
		  }else{
			 $img1 = $_POST['img1_hidden'];
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
			 $img2 = "img/hotel_images/other_images/".$file_name_new;
	   
			move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
			 echo "Success";
		  }else{
			 $img2 = $_POST['img2_hidden'];
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
			 $img3 = "img/hotel_images/other_images/".$file_name_new;

			 move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
			 echo "Success";
		  }else{
			 print_r($errors);
			 $img3 = $_POST['img3_hidden'];
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
			$img4 = "img/hotel_images/other_images/".$file_name_new;

			move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
			echo "Success";
		  }else{
			 print_r($errors);
			 $img4 = $_POST['img4_hidden'];
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
			 $img5 = "img/hotel_images/other_images/".$file_name_new;
			  
			 move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
			echo "Success";
		  }else{
			print_r($errors);
			$img5 = $_POST['img5_hidden'];
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
			 $img6 = "img/hotel_images/other_images/".$file_name_new;

			move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
			 echo "Success";
		  }else{
			print_r($errors);
			$img6 = $_POST['img6_hidden'];
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
         $img7 = "img/hotel_images/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
         $img7 = $_POST['img7_hidden'];
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
         $img8 = "img/hotel_images/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
         $img8 = $_POST['img8_hidden'];
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
         $img9 = "img/hotel_images/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
         $img9 = $_POST['img9_hidden'];
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
         $img10 = "img/hotel_images/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
         $img10 = $_POST['img10_hidden'];
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
         $img11 = "img/hotel_images/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
         $img11 = $_POST['img11_hidden'];
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
         $img12 = "img/hotel_images/other_images/".$file_name_new;

        move_uploaded_file($file_tmp,"../img/hotel_images/other_images/".$file_name_new);
         echo "Success";
      }else{
         print_r($errors);
         $img12 = $_POST['img12_hidden'];
      }
      
}
    
  
   
	
	 $sql1= "UPDATE `hotel_sehwan` SET `img_dir` = '$main_img' ,`hotel_name` = '{$_REQUEST['h_name']}',`hotel_desc` = '{$_REQUEST['s_desc']}',`hotel_price` = '{$_REQUEST['price']}' , `cancellation_policies` = '{$_REQUEST['ca_policies']}'  WHERE `id` = '{$_GET['id']}' ";
	mysqli_query($conn, $sql1);
	 

	 
	 $sql2= "UPDATE `hotel_detaill` SET `img_dir1` = '$img1' ,`img_dir2` = '$img2',`img_dir3` = '$img3' ,`img_dir4` = '$img4',`img_dir5` = '$img5' ,`img_dir6` = '$img6',`img_dir7` = '$img7' ,`img_dir8` = '$img8',`img_dir9` = '$img9' ,`img_dir10` = '$img10',`img_dir11` = '$img11' ,`img_dir12` = '$img12',`amenties1` = '{$_REQUEST['amenity1']}',`amenties2` = '{$_REQUEST['amenity2']}',`amenties3` = '{$_REQUEST['amenity3']}',`amenties4` = '{$_REQUEST['amenity4']}',`amenties5` = '{$_REQUEST['amenity5']}',`amenties6` = '{$_REQUEST['amenity6']}',`amenties7` = '{$_REQUEST['amenity7']}',`amenties8` = '{$_REQUEST['amenity8']}',`amenties9` = '{$_REQUEST['amenity9']}',`amenties10` = '{$_REQUEST['amenity10']}',`description` = '{$_REQUEST['desc']}',`hotel_name` = '{$_REQUEST['h_name']}' WHERE `hotel_id` = '{$_REQUEST['id']}' ";
	mysqli_query($conn, $sql2);
	
	
	header("Location: index.php");

}

/*------------------------------------------- */


	
if($_REQUEST['action'] == 'delete_tour' ){
	
	$sql = "DELETE FROM `hotel_tour` WHERE `id` = '{$_POST['tour_id']}'";
	mysqli_query($conn, $sql);
	$sql2 = "DELETE FROM `tour_detail` WHERE `hotel_id` = '{$_POST['tour_id']}'";
	mysqli_query($conn, $sql2);	
	header("Location: view_tours.php");	
}







if($_REQUEST['action'] == 'tour_edit_form'){
	
	
	$main_img = $img1 = $img2 = $img3 = $img4 = $img5 = $img6 = $img7 = $img8 = $img9 = $img10 = $img11 = $img12 = null;

	/** Main Image **/
	if(!empty($_FILES['image'])){
		echo "asdasdasdasdasd";
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
		//print_r($errors);
		echo $main_img = $_POST['image_hidden'];
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
			 $img1 = $_POST['img1_hidden'];
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
			 $img2 = $_POST['img2_hidden'];
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
			 $img3 = $_POST['img3_hidden'];
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
			 $img4 = $_POST['img4_hidden'];
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
			$img5 = $_POST['img5_hidden'];
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
			$img6 = $_POST['img6_hidden'];
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
			$img7 = $_POST['img7_hidden'];
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
			$img8 = $_POST['img8_hidden'];
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
			$img9 = $_POST['img9_hidden'];
		  }
	}
	
	
	
	/** Image Ten  **/   
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
			 $img9 = "img/tour_img/other_images/".$file_name_new;

			move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
			 echo "Success";
		  }else{
			print_r($errors);
			$img10 = $_POST['img10_hidden'];
		  }
	}
	
	/** Image Eleven  **/   
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
			 $img9 = "img/tour_img/other_images/".$file_name_new;

			move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
			 echo "Success";
		  }else{
			print_r($errors);
			$img11 = $_POST['img11_hidden'];
		  }
	}
	
	/** Image Twelve  **/   
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
			 $img9 = "img/tour_img/other_images/".$file_name_new;

			move_uploaded_file($file_tmp,"../img/tour_img/other_images/".$file_name_new);
			 echo "Success";
		  }else{
			print_r($errors);
			$img12 = $_POST['img12_hidden'];
		  }
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	echo $sql1= "UPDATE `hotel_tour` SET `img_dir` = '$main_img' ,`name` = '{$_REQUEST['h_name']}',`price` = '{$_REQUEST['price']}' WHERE `id` = '{$_REQUEST['id']}' ";
	mysqli_query($conn, $sql1);
	
	echo "<br><br><br><br><br><br>";
	
	echo $sql2= "UPDATE `tour_detail` SET `img1` = '$img1' ,`img2` = '$img2',`img3` = '$img3' ,`img4` = '$img4',`img5` = '$img5' ,`img6` = '$img6',`img7` = '$img7' ,`img8` = '$img8',`img9` = '$img9' ,`img10` = '$img10',`img11` = '$img11' ,`img12` = '$img12',`amenties1` = '{$_REQUEST['amenity1']}',`amenties2` = '{$_REQUEST['amenity2']}',`amenties3` = '{$_REQUEST['amenity3']}',`amenties4` = '{$_REQUEST['amenity4']}',`amenties5` = '{$_REQUEST['amenity5']}',`amenties6` = '{$_REQUEST['amenity6']}',`amenties7` = '{$_REQUEST['amenity7']}',`amenties8` = '{$_REQUEST['amenity8']}',`amenties9` = '{$_REQUEST['amenity9']}',`amenties10` = '{$_REQUEST['amenity10']}',`description` = '{$_REQUEST['desc']}',`hotel_name` = '{$_REQUEST['h_name']}' WHERE `hotel_id` = '{$_REQUEST['id']}' ";
	mysqli_query($conn, $sql2);
	
	
	header("Location: index.php");

}

ob_end_flush();
/*------------------------------------------- */






//print_r($_POST);



 ?>