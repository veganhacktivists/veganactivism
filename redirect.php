<?php
//start session
session_start();

$myConnection = mysqli_connect("localhost","vrdntf_vact_user","cpsess9272889677") or die ("could not connect to mysql"); 
mysqli_select_db($myConnection, "vrdntf_veganactivism") or die ("no database");   

if ($myConnection->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


// create an array with list of sites
// grab the key to determine which url to use
$destination = [
 'anonymousforthevoiceless.org' => 'https://www.anonymousforthevoiceless.org/?ref=veganactivism.org',
 'thesavemovement.org' => 'http://thesavemovement.org/?ref=veganactivism.org',
 'directactioneverywhere.com' => 'https://www.directactioneverywhere.com/get-active-main#find-a-chapter?ref=veganactivism.org',
 'vegansociety.com' => 'https://www.vegansociety.com/get-involved/volunteer-vegan-society?ref=veganactivism.org',
 'mercyforanimals.org' => 'https://mercyforanimals.org/action-center?ref=veganactivism.org',
 'challenge22.com' => 'https://db.challenge22.com/mentor-application-form.php?ref=veganactivism.org',
 'thehumaneleague.org' => 'https://thehumaneleague.org/fast-action-network/?ref=veganactivism.org',
 'mercyforanimals.org/hen-heroes' => 'https://mercyforanimals.org/hen-heroes?ref=veganactivism.org',
 'animalprotectors.us' => 'https://animalprotectors.us/?ref=veganactivism.org',
 'animal-ethics.org' => 'http://www.animal-ethics.org/volunteer/?ref=veganactivism.org',
 'peta.org' => 'https://www.peta.org/about-peta/volunteer/?ref=veganactivism.org',
 'veganoutreach.org' => 'https://veganoutreach.org/take-action/?ref=veganactivism.org',
 'reddit.com' => 'https://reddit.com?ref=veganactivism.org',
 'foodnotbombs.net' => 'http://foodnotbombs.net/new_site/contacts.php?ref=veganactivism.org',
 'narn.org' => 'https://narn.org?ref=veganactivism.org',
 'vegfund.org' => 'https://vegfund.org?ref=veganactivism.org',
 'adoptacollege.org' => 'https://adoptacollege.org?ref=veganactivism.org',
 'facebook.com' => 'https://www.facebook.com/groups/digitalveganactivists?ref=veganactivism.org',
 '5minutes5vegans.org' => 'https://5minutes5vegans.org/?ref=veganactivism.org',
 'veganhacktivists.org' => 'https://veganhacktivists.org/?ref=veganactivism.org',
 'veganoutreach.org/vegan-mentorship-program' => 'https://veganoutreach.org/vegan-mentorship-program/?ref=veganactivism.org'
];



 $grab_key_from_array = $destination[$_GET['destination']];
 $currentDestination = $_GET['destination'];
 
 if(isset($_SESSION[$currentDestination])){
	header('Location: ' . $destination[$_GET['destination']]); 
} else {
	
	$_SESSION[$currentDestination] = true;
	$sql="UPDATE link_clicks SET clicks=clicks+1 WHERE (link_url = '$grab_key_from_array')";
	$result = mysqli_query($myConnection, $sql) or die(mysqli_error($myConnection));

    // click counted, let's redirect
    header('Location: ' . $destination[$_GET['destination']]); 
}





exit;
?>
