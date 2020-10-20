<?php 
include("../conn/db.php");
	
  ob_start();

	echo $insertdata="DELETE FROM `langar_cat` WHERE `id` = '{$_REQUEST['id']}'";
	  
	if(mysqli_query($conn,$insertdata)){
		
		header("Location: langar_mng.php");
	}

ob_end_flush();

?>