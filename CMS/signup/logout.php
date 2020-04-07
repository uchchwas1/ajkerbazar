<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	header("Location: http://localhost/ajkerbazar1/");
	
}
else
	echo "You are not login yet!!";
?>