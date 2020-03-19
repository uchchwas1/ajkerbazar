<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	echo "sucess";
	
}
else
	echo "not";
?>