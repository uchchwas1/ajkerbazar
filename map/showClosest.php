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
<div class="container">  <div class="row">
<?PHP
/**
 * Use the Haversine Formula to display the 100 closest matches to $origLat, $origLon
 * Only search the MySQL table $tableName for matches within a 10 mile ($dist) radius.
 */

$connect = mysqli_connect("localhost", "root", "", "foodbank");
$tableName = 'restaurant';
$origLat = 23.815084;
$origLon = 90.425531;
$dist = 1; // This is the maximum distance (in miles) away from $origLat, $origLon in which to search
$query = "SELECT r_name,r_id, lat, lng, 3956 * 2 * 
          ASIN(SQRT( POWER(SIN(($origLat - lat)*pi()/180/2),2)
          +COS($origLat*pi()/180 )*COS(lat*pi()/180)
          *POWER(SIN(($origLon-lng)*pi()/180/2),2))) 
          as distance FROM $tableName WHERE 
          lng between ($origLon-$dist/cos(radians($origLat))*69) 
          and ($origLon+$dist/cos(radians($origLat))*69) 
          and lat between ($origLat-($dist/69)) 
          and ($origLat+($dist/69)) 
          having distance < $dist ORDER BY distance limit 100"; 

$results = mysqli_query($connect, $query);
//print_r($results);

while($row = mysqli_fetch_array($results)) {
    echo $row['r_name']." > ".$row['distance']."<BR>";
echo $row['r_id'];
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