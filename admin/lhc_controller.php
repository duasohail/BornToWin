<?php 
include("../conn/db.php");
	
ob_start();

	
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
				$main_img = "img/light_hearted_client/".$file_name_new;
				move_uploaded_file($file_tmp,"../img/light_hearted_client/".$file_name_new);
			  }else{
				print_r($errors);
			  }
			  
		}
		
		
		/*-------------------------------------------------------------------------*/
	
		  
		echo $sql2 = "INSERT INTO `light_hearted_clients` (`text`,`img`) VALUES ('{$_REQUEST['text']}','$main_img') ";
		  
		if(mysqli_query($conn,$sql2)){
			
			header("Location: light_hearted_clients.php");
		}else{
echo mysqli_connect_errno();
}
	}
	
	if($_REQUEST['action'] == 'delete'){
	
		$insertdata="DELETE FROM `light_hearted_clients` WHERE `id` = '{$_REQUEST['id']}'";
		  
		if(mysqli_query($conn,$insertdata)){
			
			header("Location: light_hearted_clients.php");
		}
	
	}
	
	
	
 ob_end_flush();
	
?>