<?php include ("server.php");
include('../../navbarwWthoutSearch.php');
?>



<?php 


    if(!isset($_SESSION['username']))
             echo '<script>alert("you have to login")</script>';

else{
     $user= $_SESSION['username'];
	$status = "SELECT status FROM `users` WHERE username='$user'";
	$status_1 = mysqli_query($db, $status);
	$status_2=mysqli_fetch_array($status_1);
    
    $status_3=$status_2['status'];


          if($status_3=='Pending'){
          	include "Pending.php";
          }
          elseif ($status_3=='Dispatched') {
          	include "Dispatched.php";
          }
          elseif ($status_3=='Processed') {
          	include "Processed.php";
          }
          elseif ($status_3=='Shipped') {
          	include "Shipped.php";
          }
          elseif ($status_3=='Delivered') {
          	include "Delivered.php";
          }
     }
?>