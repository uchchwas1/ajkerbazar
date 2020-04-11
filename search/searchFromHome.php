<?php include('../navbar.php'); ?>
<?php
  require("app/engine.php");
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
<!--      
      <form action="" method="GET">
        <input type="text"   name="key" placeholder="Search here" required>
        <input type="submit" value="Search">
      </form>
-->      
    <?php
      $keyword = null;
      $count = 0;
	  //get("key")= $_GET['key']
      if($s->get("key")) {
      $keyword = clean($_GET['key']);
      $found   = $s->search($keyword);
      $count   = count($found);
    }
    ?>
<div class="container">  <div class="row">
<div style="clear:both"></div>
				
			
			<div class="table-responsive"><br><h3><aside found="<?php echo $count ." results"; ?>"> You searched for [ <?php echo $keyword; ?> ] </aside></h3><br>
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="20%">Price</th>
						<th width="15%">Add to cart</th>
					</tr>
 

    <?php
     if($s->get("key") && $count > 0) {

      foreach( $found as $row ) { ?>
	                <tr>
						<td><?php echo $row['items']; ?></td>
						<td><?php echo $row['price']; ?></td>				
	     				<td><a href="single.php?action=add&r_id=<?php echo $_GET["r_id"];?>&code=<?php echo $values["item_code"];?>"><span class="text-danger">Add to cart</span></a></td>
					</tr>

                    

<?php    }
  }
 
?>
 </table>
				</div>
			</div> </div>
    </section>
  </main>

  

</body>
</html>

