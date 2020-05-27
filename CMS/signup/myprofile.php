<?php
session_start();
//include('./navbar.php');
//include "../navbarwWthoutSearch.php"
include('../../navbarwWthoutSearch.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>


  <title>Ajker Bazar</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">



</head>
<body>

<br><br>
  <main>
    <section>

<div class="container">  <div class="row">
<div style="clear:both"></div>


			<div class="table-responsive"><br><h3> MY PROFILE  </aside></h3><br>
				<!-- <table class="table table-bordered"> -->



<?php


$connect = mysqli_connect("localhost", "root", "", "foodbank");


		 if(!isset($_SESSION['username']))
			 echo '<script>alert("you have to login")</script>';
	     else {
		 $sql="SELECT * FROM `users` WHERE username = '". $_SESSION['username']."'";
          $result = mysqli_query($connect, $sql);
          $pran=$_SESSION['username'];
          //$res=mysqli_query($link,"select * from client where name='$pran'");
          echo "<table border='1' class='table table-bordered'>";
          echo "<tr>";
          //echo "<th>"; echo "Picture"; echo "</th>";
          echo "<th>"; echo "User Id"; echo "</th>";
          echo "<th>"; echo "Name"; echo "</th>";
          echo "<th>"; echo "Email"; echo "</th>";
          echo "<th>"; echo "Address"; echo "</th>";
          echo "<th>"; echo "Contact"; echo "</th>";
          echo "<th>"; echo "Password"; echo "</th>";
          echo "<th>"; echo "Edit"; echo "</th>";
          echo "</tr>";
          while ($row=mysqli_fetch_array($result))
          {
            //echo "<tr";

            echo "<td>"; echo $row["id"]; echo "</td>";
            echo "<td>"; echo $row["username"]; echo "</td>";
            echo "<td>"; echo $row["email"]; echo "</td>";
            echo "<td>"; echo $row["address"]; echo "</td>";
            echo "<td>"; echo $row["contact"]; echo "</td>";
            echo "<td>"; echo $row["password"]; echo "</td>";
            echo "<td>"; ?><a href="editmyprofile.php?id=<?php echo $row["id"]; ?>">Change</a> <?php echo "</td>";
            echo "</tr>";

          }
          echo "</table>";
        }
?>


				<!-- </table> -->
				</div>
			</div> </div>
    </section>
  </main>



</body>
</html>
