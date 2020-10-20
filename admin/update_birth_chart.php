<?php

ob_start();

	include("../conn/db.php");
	
	$sql = "UPDATE `birth_chart` SET `Paraone` = '{$_POST['paraOne']}' ,`Paratwo` = '{$_POST['paraTwo']}' ,`Parathree` = '{$_POST['paraThree']}' Where `id` = '1'  ";
	$data= mysqli_query($conn,$sql);
	

	header("Location: birth_chart.php");

ob_end_flush();

	
?>