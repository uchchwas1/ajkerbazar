<?php
 

require_once 'classes/entry.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body>

<div class="row">	
<?php 

$query = 'SELECT * FROM restaurant ORDER BY r_id DESC LIMIT 7;';

require_once('classes/dbh.php');

$dbh = new Dbh();

$rows = $dbh->executeSelect($query);

//print_r($rows);

foreach ($rows as $row) {
	$entry = new Entry();

	$entry->setByRow($row);

?>




     
	  
	   <div class="mb-4">	
	      <div class="col-lg-4 col-md-4 col-12">
	       <div class="card" style="width:400px">
           <a href="single.php?r_id=<?php echo $entry->getId(); ?>"><img class="card-img-top" src="images2\<?php echo $entry->getId(); ?>.jpg"" alt="Card image"></a>
           <div class="card-body">
           <a href="single.php?r_id=<?php echo $entry->getId(); ?>"><h4 class="card-title"> <?php echo $entry->getName(); ?> </h4>
           </a>
           
		   
          </div>
          </div> 
          </div>
          </div>

	      

  

				
					

				

						

								

						
						

		
			

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php } ?>

	</body>
</html>
