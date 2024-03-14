<?php
// I forgot to migrate over login and register so I will be doing that in the next update.
$defaultPage = '
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
$gamesPage = '<h1>Games</h1><p>Games are coming soon stay up to date in the '.$siteName.' Discord!</p>';
$loginPage = '<h1>Login</h1><p>Login is coming soon stay up to date in the '.$siteName.' Discord!</p>';
$registerPage = '<h1>Register</h1><p>Register is coming soon stay up to date in the '.$siteName.' Discord!</p>';
$forumPage = '<h1>Forum</h1><p>Forums are coming soon stay up to date in the '.$siteName.' Discord!</p>';
$searchPage = '<h1>Search</h1>
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
?>
