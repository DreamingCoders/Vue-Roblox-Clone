<?php
// config
$isConfig = true;
// error logging
$errorsEnabled = true;
if(isset($errorsEnabled){
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);
}
// sessions
if(!isset($_SESSION['vue-enc-login-userid-a92bc426a']) || !isset($_SESSION['your-enc-subdmn'])){
	session_start(); // this actually prevents hectic logs by validating session is available.
}
if(isset($_SESSION['vue-enc-login-userid-a92bc426a'])){ // in case we ever need a seperate session this prevents subdomains logging in other users.
	$sessionName = 'vue-enc-login-userid-a92bc426a'; // repeat this
	$LocalUserId = $sessionName; // this hard to access static session is now calling all user ids.
}
// db connections and checksums
if(isset($_GET['loadScripts']) || $isConfig == true){
<?php
$host = 'localhost'; // You normally will leave this the same unless you're doing Remote SQL, in this case we are using MySQL/PDO.
$dbname = 'your_database_name'; // DB Name.
$username = 'your_username'; // Username usually root,admin,etc.
$password = 'your_password'; // Password, is usually pre-set on a droplet.

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$ajax = "enabled";
if(isset($ajax)){
// AJAX
header('Content-type:application/json;charset=utf-8');

$jsonStr ='{
	"main": {
		"title": "Hello",
		"desc": "World!"
	}
}';

//$json = json_encode($jsonStr, JSON_PRETTY_PRINT);
//echo json_decode($json);

echo $jsonStr;
    //require('vendor/javascript/cards.js');
}
}
?>
