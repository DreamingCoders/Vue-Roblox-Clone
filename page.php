<?php
if(!isset($isHeader)){
    // If there isn't a header detected we can add custom overrides here, generally it will run false flags for now.
}
if(!isset($isConfig)){
    // If there isn't a config detected we can add custom overrides here, generally it will run false flags for now.
}
if(!isset($siteName)){
$siteName = "One Page App"; // If you dont want to load header or config, preferrably used for skeleton API's or single static data.
}

$page = $_GET['page'];

// 'Single Page' Interface.
?>

<?php
switch ($page) {
    case 'defaultPage':
        echo '
        <div class="card">
        <div class="card-header bg-primary text-white"><h2>Welcome to '.$siteName.'!</h2></div>
        <div class="card-body"><a class="btn btn-success text-white">Login</a> <a class="btn btn-primary text-white">Register</a></div>
        </div>
        <br><br>';
        break;
    case 'games':
        echo '<h1>Games</h1><p>Games are coming soon stay up to date in the '.$siteName.' Discord!</p>';
        break;
    case 'forum':
        echo '<h1>Forum</h1><p>Forums are coming soon stay up to date in the '.$siteName.' Discord!</p>';
        break;
    default:
        echo '<h1>Page not found</h1><p>The requested page does not exist. (Still mining lol)</p>';
        break;
}
?>
<!-- Footer -->
<div class="card">
    <div class="card-header bg-primary text-white">
Copyright &copy; <?=date("Y")?> <?=$siteName?> All Rights Reserved.
</div>
<div class="card-body">
    Links
</div>
<!-- End Footer -->