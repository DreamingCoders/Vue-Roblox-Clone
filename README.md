# Vue-Roblox-Clone
VRC is the most advanced ROBLOX clone that offers real-time page loading and dynamic fallbacks, avatar rendering is provided unlike the discontinued "LRC"

# For the Client
Access this Repository
https://github.com/DreamingCoders/polytoria

# For Trade/Value (Website official or unofficial usage)
Access this Repository
https://github.com/DreamingCoders/VRCTrade

# Install
Install.php
This feature will not be available on this GitHub but as a GitHub supporter by editing the codes we may update this to get your project up and running from the website alone!

# Setup
core/config.php (or core/db.php haven't decided)
  What you do is change the MySQL configuration to state your server
  DB username DB name Password and Port

There is a file called db.php it's actually an SQL file rename the file as .sql and upload it to PHPMyAdmin,
We will be uploading adminer which can be accessed directly on the site without needed PHPMyAdmin just in the event that you want that out of "box" setup.

Upload that and Viola! it is running, however there's one more step.
We kinda do have a purpose for install.php, you need Blender!
go to https://yourwebsite.com/install.php?installBlender = true;

It may ask you a few things and might not be automated for the time being.

WIP:
```php
<?php
$file = 'source.php';
$current = file_get_contents($file);
$current .= "<?php exec("sudo apt-get update && sudo apt-get upgrade && sudo apt-get dist-upgrade && sudo apt-get full-upgrade && sudo apt-get purge && sudo apt-get autoremove -y?>";
// Write the contents back to the file
file_put_contents($file, $current);
?>
```


There is a launcher but you don't really have to use it it's optional
https://github.com/DreamingCoders/VRCLauncher/tree/main
