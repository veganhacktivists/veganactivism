<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
//grab cleaned location
$clean_location = htmlspecialchars($_GET["location"]);
//lets limit the character count
$secure_location = substr($clean_location, 0, 30);
//lets redirect it now
header('Location: https://www.facebook.com/search/groups/?q=Vegan%20' .$secure_location);
die();
?>
