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
	
	$body = $name."\n".$phone."\n".$email."\n".$msg;
	

	$query = "INSERT INTO `contact` (name,phone,email,msg) VALUES ('$name','$phone','$email','$msg') ";
	$query2 = "SELECT * FROM `footer`";
	$data = mysqli_query($conn,$query2);
	$row = mysqli_fetch_assoc($data);
	
	if(mysqli_query($conn,$query)){
		mail($row['email'],"From Born to win", $body );
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


 ob_end_flush();



?>