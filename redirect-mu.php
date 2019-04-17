<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
//grab cleaned location
$clean_location = htmlspecialchars($_GET["location"]);
//lets limit the character count
$secure_location = substr($clean_location, 0, 8);
//lets redirect it now
header('Location: https://www.meetup.com/find/?allMeetups=false&keywords=Vegan&radius=5&userFreeform=' .$secure_location);
die();
?>
