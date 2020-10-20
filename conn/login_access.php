<?php 

include('db.php');
session_start(); 


print_r($_POST);


$username=$_POST['username'];

$pass=$_POST['password'];


for($a=0; $a<5; $a++){
    $pass  = base64_encode ($pass);
}

$sql = "select * from `login_details` where `username`='".$username."' and `password` = '".$pass."'";
$data = mysqli_query($conn,$sql);


if(isset($_SESSION['credentials'])){
    if(mysqli_num_rows($data)){

        $_SESSION['credentials'] = 'true';
    
        header("Location: ../admin");
    }
    else{
        header("Location: ..");
    }

}else{
    header("Location: ..");
}


?>