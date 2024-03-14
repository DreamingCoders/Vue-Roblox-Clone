<?php
// If there isn't a header/config detected we can add custom overrides here, generally it will run false flags for now.
if(!isset($isHeader)){
}
if(!isset($isConfig)){
}
if(!isset($siteName)){
$siteName = "One Page"; // If you don't want to load the header use skeleton API
}

$page = $_GET['page'];

// 'Single Page' Interface.
    // To edit HTML go to blade-(name).php it contains the variable for the frontend code
        // to edit PHP/Backend go to backend-(name).php. Please note you can still use backend on blade pages
    // blade-default.php
    // blade.games.php
        // backend-default.php
        // backend-games.php
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
    case 'search':
        if(isset($_POST['search'])){
            echo"<div class='alert alert-danger text-center'>Failed to search POST!</div>";
        }
        echo '<h1>Search</h1>
        <form action="#" method="POST">
            <input type="text" name="search" class="form-control" placeholder="Search and press Enter">
        </form>
        <div class="row">
            <div class="col">
                <h5>Example User</h5>
                <img src="https://nova-cubes.com/storage/avatars/uma/2.png" class="img-fluid">
            </div>
            <div class="col">
                <h5>Example User</h5>
                <img src="https://nova-cubes.com/storage/avatars/uma/2.png" class="img-fluid">
            </div>
            <div class="col">
                <h5>Example User</h5>
                <img src="https://nova-cubes.com/storage/avatars/uma/2.png" class="img-fluid">
            </div>
            <div class="col">
                <h5>Example User</h5>
                <img src="https://nova-cubes.com/storage/avatars/uma/2.png" class="img-fluid">
            </div>
        </div>';
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
