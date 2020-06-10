<?php


require_once 'classes/entry.php';



?>
<?php include('../navbarwWthoutSearch.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>



</head>
<body>
<!--navbar srt !-->

<!-- END nav !-->



<!-- Coding strt !-->
<div class="row">
<?php

$query = 'SELECT * FROM restaurant ORDER BY r_id DESC LIMIT 9;';

require_once('classes/dbh.php');

$dbh = new Dbh();

$rows = $dbh->executeSelect($query);

//print_r($rows); ?>

<div class="container">  <div class="row"><?php

foreach ($rows as $row) {
	$entry = new Entry();

	$entry->setByRow($row);

?>

<div class="col-4">

	     <div class="card" style="width:350px">
           <a href="single.php?r_id=<?php echo $entry->getId(); ?>"><img class="card-img-top" src="images2\<?php echo $entry->getId(); ?>.jpg"" alt="Card image"></a>
           <div class="card-body">
           <a href="single.php?r_id=<?php echo $entry->getId(); ?>"><h4 class="card-title"> <?php echo $entry->getName(); ?> </h4>
           </a>
          </div>
        </div>

 </div>







<?php } ?>
 </div>
</div>



	</body>
</html>
