<?php
session_start();
//include('./navbar.php');
//include "../navbarwWthoutSearch.php"
include('../../navbarwWthoutSearch.php');
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"foodbank");

$res=mysqli_query($link,"select * from users where username ='". $_SESSION['username']."'");
while ($row=mysqli_fetch_array($res))
{
  $u_id=$row["id"];
  $u_name=$row["username"];
  $u_mail=$row["email"];
  $u_address=$row["address"];
  $u_cont=$row["contact"];
  $u_pass=$row["password"];
  //$sp_name=$row["r_name"];
  //$pro_cat=$row["product_catagory"];
  //$pro_des=$row["product_desc"];
}
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

    <style>
table {
  /* width:100%;  */
}
table, th, td {
  /* border: 1px solid black;
  border-collapse: collapse; */
}
th, td {
  /* padding: 15px;  */
  /* text-align: left; */
}
table tr:nth-child(even) {
  background-color: #eee;
}
table tr:nth-child(odd) {
 background-color: #fff;
}
table th {
  background-color: green;
  color: white;
}
</style>



</head>
<body>

<br><br>
  <main>
    <section>

<div class="container">  <div class="row">
<div style="clear:both"></div>

<?php
if(!isset($_SESSION['username']))
  echo '<script>alert("you have to login")</script>';
 ?>


			<div class="table-responsive"><br><h3> Edit Profile  </aside></h3><br>
				<!-- <table class="table table-bordered"> -->

         <div>
           <form name="form1" action="" method="post" enctype="multipart/form-data">

          <table border="1">

          <tr>
          <th>User Name</th>
          <td><input type="text" name="unm" value="<?php echo $u_name; ?>"></td>
          </tr>
          <tr>
          <th>Email</th>
          <td><input type="text" name="eml" value="<?php echo $u_mail; ?>"></td>
          </tr>
          <tr>
          <th>Address</th>
          <td><input type="text" name="add" value="<?php echo $u_address; ?>"></td>
          </tr>
          <tr>
          <th>Contact</th>
          <td><input type="text" name="con" value="<?php echo $u_cont; ?>"></td>
          </tr>
          <tr>
          <th>Password</th>
          <td><input type="text" name="ups" value="<?php echo $u_pass; ?>"></td>
          </tr>

          <tr>
          <td colspan="2" align="center"><input type="submit" name="submit1" value="Update"></td>
        </tr>


          </table>


          </form>
          <?php
          if(isset($_POST["submit1"]))
          {


          //mysqli_query($link,"insert into product values('',$choya,'$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]')");
          mysqli_query($link,"UPDATE users SET username='$_POST[unm]',email='$_POST[eml]',address='$_POST[add]',contact='$_POST[con]',password='$_POST[ups]' where username='$u_name'");


          }

          ?>


           </div>


				<!-- </table> -->
				</div>
			</div> </div>
    </section>
  </main>



</body>
</html>
