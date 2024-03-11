<?php
if(!isset($isHeader)){
    // If there isn't a header detected we can add custom overrides here, generally it will run false flags for now.
}
if(!isset($isConfig)){
    // If there isn't a config detected we can add custom overrides here, generally it will run false flags for now.
}
if(!isset($siteName)){
$siteName = "One Page"; // If you dont want to load header or config, preferrably used for skeleton API's or single static data.
}

$page = $_GET['page'];

// 'Single Page' Interface.
?>

<?php
switch ($page) {
    case 'defaultPage':
        echo '
        <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>Welcome to '.$siteName.'!</h2>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col">
            <h2>You are now playing '.$siteName.'!</h2>
            '.$siteName.' is a One Paged Laravel alternative for sandbox/roblox like websites.
            everything is loading into one page and templated amazingly with raw PHP. We
            give similar features to Laravel but without having to use their bloated regex and
            allow you to code full PHP without implicitly needing new routing, you can add pages
            via get requests javascript routes and database logics, much more to offer than your
            conventional framework!
            <h2>Get Started</h2>
            <h4>You will be the 1300th User!</h4>
            <p>If you register, or you can login with either of the buttons below.</p>
                    <a class="btn btn-success text-white">Login</a> 
                    <a class="btn btn-primary text-white">Register</a>
            </div>
            <div class="col">
                <img src=\'https://nova-cubes.com/storage/avatars/uma/2.png\'">
            </div>
        </div>
        </div>
        <br><br>';
        break;
    case 'games':
        echo '<h1>Games</h1><p>Games are coming soon stay up to date in the '.$siteName.' Discord!</p>';
        break;
    case 'login':
        echo '<h1>Login</h1><p>Login is coming soon stay up to date in the '.$siteName.' Discord!</p>';
        break;
    case 'register':
        echo '<h1>Register</h1><p>Register is coming soon stay up to date in the '.$siteName.' Discord!</p>';
        break;
    case 'forum':
        echo '<h1>Forum</h1><p>Forums are coming soon stay up to date in the '.$siteName.' Discord!</p>';
        break;
    default:
        echo '<h1>Page not found</h1><p>The requested page does not exist.</p>';
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
