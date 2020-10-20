<?php 
include("../conn/db.php");
	
	
	if($_REQUEST['action'] == 'add_stuff'){
		
	///	echo $_REQUEST['id'];
		
		$main_img = null;
		/** Main Image **/
		if(isset($_FILES['image'])){
			
			  $errors= array();
			  $file_name = $_FILES['image']['name'];
			  $file_size = $_FILES['image']['size'];
			  $file_tmp = $_FILES['image']['tmp_name'];
			  $file_type = $_FILES['image']['type'];
			  $tmp = explode('.', $file_name);
			   $file_ext = end($tmp);
			  
			  
			//echo  $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
			  
			  $extensions= array("jpeg","jpg","png","gif");
			  
			  if(in_array($file_ext,$extensions)=== false){
				 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
			  }
			  
			  $arry=explode(".",$file_name);
			  $file_name_new = $arry[0].time().".".$file_ext;
			  
			  if(empty($errors)==true) {
				$main_img = "img/testimonials/".$file_name_new;
				move_uploaded_file($file_tmp,"../img/testimonials/".$file_name_new);
			  }else{
				print_r($errors);
			  }
			  
		}
		
		
		/*-------------------------------------------------------------------------*/
	
		  
		$sql2 = "INSERT INTO `testimonial` (`video_url`,`img`) VALUES ('{$_REQUEST['url']}','$main_img') ";
		  
		if(mysqli_query($conn,$sql2)){
			
			header("Location: testimonial.php");
		}
	}
	
	if($_REQUEST['action'] == 'delete'){
	
		$insertdata="DELETE FROM `testimonial` WHERE `id` = '{$_REQUEST['id']}'";
		  
		if(mysqli_query($conn,$insertdata)){
			
			header("Location: testimonial.php");
		}
	
	}
	
?>