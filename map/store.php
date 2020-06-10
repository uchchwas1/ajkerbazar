<?PHP
/**
 * Use the Haversine Formula to display the 100 closest matches to $origLat, $origLon
 * Only search the MySQL table $tableName for matches within a 10 mile ($dist) radius.
 */

$connect = mysqli_connect("localhost", "root", "", "foodbank");
$tableName = 'restaurant';
$origLat = 23.0126353;
$origLon = 91.3906724;
$dist = 1; // This is the maximum distance (in miles) away from $origLat, $origLon in which to search
$query = "SELECT r_name, lat, lng, 3956 * 2 * 
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
	
}

?>