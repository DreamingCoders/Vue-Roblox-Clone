<?php
$isConfig = true;

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
?>

    //require('vendor/javascript/cards.js');
}
?>
