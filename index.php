<?php
$siteName = "One Page App";
$siteDesc = "One Page is a One Paged Laravel alternative for sandbox/roblox like websites. everything is loading into one page and templated amazingly with raw PHP. We give similar features to Laravel but without having to use their bloated regex and allow you to code full PHP without implicitly needing new routing, you can add pages via get requests javascript routes and database logics, much more to offer than your conventional framework!";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2813599722532775"
     crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="description" content="<?=$siteDesc?>">
        <meta name="keywords" content="Cool"
        <meta name="author" content="nova-cubes.com">
        <meta name="robots" content="noindex, nofollow">
        <title><?=$siteName?></title>
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="scripts/jquery.cookie-1.4.1.min.js"></script>
        <script src="scripts/foundation.js?r=<?=rand()?>"></script>
        <script src="scripts/Chart.min.js"></script> <!-- Recent Average Chart API -->
        <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$siteName?></title>
        <link rel="stylesheet" href="styli.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <style>
        .landingPage{
            display: none;
        }
    </style>
    <div id="app">
        <?php
            include('html/header.php');
        ?>
            <div class="container mt-4">
                <div v-html="content"></div>
            </div>
        </div>
        <span id="oldFramework">
            <?php
            if(isset($oldLanding) || $oldLanding == true){ // We don't use this anymore
                    include('stats.php');
                }
            ?>
        </span>
        <!-- Vue.js -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script>
            <?php
                if(isset($vueCode)){
                    echo $vueCode;
                }else{
                    echo"alert('There was an error on the website');";
                }
            ?>
        </script>
        <!-- End Vue.js -->
    </body>
</html>
