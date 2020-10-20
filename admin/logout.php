<?php 


ob_start();
 session_start();

session_destroy();

    header("location: http://mysehwan.com/");

	ob_end_flush();

?>