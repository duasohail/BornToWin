<?php
include( "../conn/db.php");

 ob_start();


if(isset($_POST['submit1'])){

	 $image=$_FILES['img']['name'];
   	 $tmp_img=$_FILES['img']['tmp_name'];

    	move_uploaded_file($tmp_img,"../img/articles/$image");

	$heading=$_POST['head1'];
	$desc1=$_POST['desc1'];
	$desc2=$_POST['desc2'];

		$query="INSERT INTO articles (title,l_description,s_description,image) VALUES ('$heading','$desc2','$desc1','../img/articles/$image')";
		//$query = "UPDATE articles SET  title='$heading' ,  description='$desc' , image='../img/articles/$image' where `id` = '1' ";
		if(mysqli_query($conn,$query)){
			
			header("Location: articles.php");	
			
		
	}

}

if(isset($_POST['submit3'])){

	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$msg=$_POST['msg'];
	$about=$_POST['about_us_details'];
	

	$query = "UPDATE `contact` SET  `name` = '$name',`phone` = '$phone',`email` = '$email',`msg` = '$msg' , `details`='$about'  where `id` ='1' ";


	if(mysqli_query($conn,$query)){
		header("Location: main_page.php");	
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


if($_REQUEST['action'] == 'delete'){

		$insertdata="DELETE FROM `articles` WHERE `id` = '{$_REQUEST['articles_id']}'";
		  
		if(mysqli_query($conn,$insertdata)){
			
			header("Location: articles.php");
		}
	
	}


	if($_REQUEST['action'] == 'delete_event'){

		$insertdata="DELETE FROM `events` WHERE `id` = '{$_REQUEST['event_id']}'";
		  
		if(mysqli_query($conn,$insertdata)){
			
			header("Location: event_mng.php");
		}
	
	}



 ob_end_flush();



?>