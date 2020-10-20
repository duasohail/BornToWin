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




if(isset($_POST['submit_img1'])){

	 $image1=$_FILES['img1']['name'];
   	 $tmp_img=$_FILES['img1']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/gallery/$image1");


		$query="UPDATE gallery SET `image`= '../img/gallery/$image1' WHERE id=1 ";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: gallery.php");	
			
		
	}
}


if(isset($_POST['submit_img2'])){

	 $image1=$_FILES['img2']['name'];
   	 $tmp_img=$_FILES['img2']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/gallery/$image1");


		$query="UPDATE gallery SET `image`= '../img/gallery/$image1' WHERE id=2 ";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: gallery.php");	
			
		
	}
}



if(isset($_POST['submit_img3'])){

	 $image1=$_FILES['img3']['name'];
   	 $tmp_img=$_FILES['img3']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/gallery/$image1");


		$query="UPDATE gallery SET `image`= '../img/gallery/$image1' WHERE id=3 ";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: gallery.php");	
			
		
	}
}



if(isset($_POST['submit_img4'])){

	 $image1=$_FILES['img4']['name'];
   	 $tmp_img=$_FILES['img4']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/gallery/$image1");


		$query="UPDATE gallery SET `image`= '../img/gallery/$image1' WHERE id=4 ";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: gallery.php");	
			
		
	}
}



if(isset($_POST['submit_img5'])){

	 $image1=$_FILES['img5']['name'];
   	 $tmp_img=$_FILES['img5']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/gallery/$image1");


		$query="UPDATE gallery SET `image`= '../img/gallery/$image1' WHERE id=5 ";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: gallery.php");	
			
		
	}
}

if(isset($_POST['submit_img6'])){

	 $image1=$_FILES['img6']['name'];
   	 $tmp_img=$_FILES['img6']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/gallery/$image1");


		$query="UPDATE gallery SET `image`= '../img/gallery/$image1' WHERE id=6 ";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: gallery.php");	
			
		
	}
}




ob_end_flush();
?>