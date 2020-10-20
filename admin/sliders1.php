<?php 
include("../conn/db.php");
	
ob_start();

	
	if($_REQUEST['action'] == 'add'){
		
	///	echo $_REQUEST['id'];
		
		$main_img = null;
		if(isset($_FILES['image'])){
			
			  $errors= array();
			  $file_name = $_FILES['image']['name'];
			  $file_size = $_FILES['image']['size'];
			  $file_tmp = $_FILES['image']['tmp_name'];
			  $file_type = $_FILES['image']['type'];
			  $tmp = explode('.', $file_name);
			   $file_ext = end($tmp);
			  
			  
			  
			  $extensions= array("jpeg","jpg","png","gif");
			  
			  if(in_array($file_ext,$extensions)=== false){
				 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
			  }
			  
			  $arry=explode(".",$file_name);
			 $file_name_new = $arry[0].time().".".$file_ext;
			  
			  if(empty($errors)==true) {
				$main_img = "img/sliders/".$file_name_new;
				move_uploaded_file($file_tmp,"../img/sliders/".$file_name_new);
			  }else{
				print_r($errors);
			  }
			  
		}
		
		
		/*-------------------------------------------------------------------------*/
	
		  
		echo $sql2 = "INSERT INTO `sliders` (`img`) VALUES ('$main_img') ";
		  
		if(mysqli_query($conn,$sql2)){
			
			header("Location: main_page.php");
		}else{
echo mysqli_connect_errno();
}
	}
	
	
	
	
	
	
	if($_REQUEST['action'] == 'delete'){

		$insertdata="DELETE FROM `sliders` WHERE `id` = '{$_REQUEST['slider_id']}'";
		  
		if(mysqli_query($conn,$insertdata)){
			
			header("Location: main_page.php");
		}
	
	}

ob_end_flush();


	
?>