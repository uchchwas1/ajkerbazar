<?php

$lat=(isset($_GET['lat']))?$_GET['lat']:'';
$long=(isset($_GET['long']))?$_GET['long']:'';

//do whatever you want

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .btn {
  background-color: DodgerBlue;
  border: none;
  color: black;
  padding: 15px 76px;
  font-size: 25px;
  cursor: pointer;
  display:inline-block;
  transform: translate(450px,225px);
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>

<body ><!--onload="getLocation()" use it for on load page-->

<!-- <button onclick="getLocation()">Try It</button> -->
<button class="btn" onclick="getLocation()"><i class="fa fa-map-marker" ></i> Search Your Location</button>

<script>

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(redirectToPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function redirectToPosition(position) {
        window.location='showClosest.php?lat='+position.coords.latitude+'&long='+position.coords.longitude;
    }
</script>
<?php

echo $lat=(isset($_GET['lat']))?$_GET['lat']:'';
echo $long=(isset($_GET['long']))?$_GET['long']:'';

//do whatever you want

?>
</body>
</html>
