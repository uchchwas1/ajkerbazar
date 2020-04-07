<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	header("Location: http://localhost/ajkerbazar/index.html");
	
}
else
	echo "You are not login yet!!";
?>