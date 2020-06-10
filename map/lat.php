<?php

$lat=(isset($_GET['lat']))?$_GET['lat']:'';
$long=(isset($_GET['long']))?$_GET['long']:'';

//do whatever you want

?>

<!DOCTYPE html>
<html>
<body ><!--onload="getLocation()" use it for on load page-->

<button onclick="getLocation()">Try It</button>

<script>

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(redirectToPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function redirectToPosition(position) {
        window.location='getPosition.php?lat='+position.coords.latitude+'&long='+position.coords.longitude;
    }
</script>
<?php

echo $lat=(isset($_GET['lat']))?$_GET['lat']:'';
echo $long=(isset($_GET['long']))?$_GET['long']:'';

//do whatever you want

?>
</body>
</html>