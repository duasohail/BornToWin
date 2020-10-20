<?php
include( "../conn/db.php");

 ob_start();


if(isset($_POST['submit1'])){

	$heading=$_POST['heading'];
	$desc=$_POST['desc'];



	if(($_POST['heading']!=NULL)){


		$query = "UPDATE about SET  name='$heading' , value ='$desc' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: main_page.php");	
			
		}
		
		

	}

}

if(isset($_POST['submit3'])){

	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$about=$_POST['about_us_details'];
	

	$query = "INSERT INTO `contact` (name,phone,email,msg,details) VALUES ('$name','$phone','$email','$msg','$about') ";


	if(mysqli_query($conn,$query)){
		header("Location:..");	
	}
}



if(isset($_POST['submit2'])){

	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$mon_wed=$_POST['mon_wed'];
	$sat=$_POST['sat'];
	$fb=$_POST['fb'];
	$l_in=$_POST['l_in'];
	$google=$_POST['google'];
	$twit=$_POST['twit'];
	

	$query = "UPDATE `footer` SET  `address` = '$address',`phone` = '$phone',`email` = '$email',`mobile` = '$mobile',`mon_wed` = '$mon_wed',`sat` = '$sat' ,`fb` = '$fb' ,`l_in` = '$l_in' ,`google` = '$google' ,`twit` = '$twit'  where `id` ='1' ";


	if(mysqli_query($conn,$query)){
		header("Location: main_page.php");	
	}
}



if(isset($_POST['submit5'])){

	 $spon=$_FILES['image']['name'];
   	 $tmp_img=$_FILES['image']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/logo/$spon");


		//$query="UPDATE gallery SET `image`= '../img/logo/$image1' WHERE id=5 ";
		$query="INSERT INTO sponser (image)VALUES ('../img/logo/$spon')";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: sponser.php");	
			
		
	}
}




if($_REQUEST['action'] == 'delete'){

		$insertdata="DELETE FROM `sponser` WHERE `id` = '{$_REQUEST['slider_id']}'";
		  
		if(mysqli_query($conn,$insertdata)){
			
			header("Location: sponser.php");
		}
	
	}

 ob_end_flush();



?>