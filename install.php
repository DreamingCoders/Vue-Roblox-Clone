<div class="container">
<h4>VRC Installation</h4>
  <h5>Free Copy</h5>
  <?php
  // Add a commit before changing this https://github.com/DreamingCoders/Vue-Roblox-Clone/new/main when you make a commit add
    // Override provided by https://github.com/(YOUR GITHUB FOR PROOF)

  <p>You are using the free copy of VRC, we have not established a premium version that is installed for you,
  in the event that you wanted a more advanced version, or perhaps to redistribute this page you are allowed
  to edit the github <a href="https://github.com/DreamingCoders/Vue-Roblox-Clone/new/main">Here</a>. By committing
  a change you are permitted to share this source that will allow you to have complete control over this source.</p>
<form action="#" method="POST">
  <input type="text" name="install" placeholder="Installation Key">
  <input type="submit" name="authorization" value="Authorization">
</form>
</div>

<?php
function addDb(){
  echo "<div class='alert alert-danger text-center text-white'><h4 style='font-weight: bold'>Authorization page not loaded!</h4>";
}
include('core/authorization.php');
  addDb();
    exec("sudo apt-get update -y && sudo apt-get upgrade -y && sudo apt-dist-upgrade -y && sudo apt-get autoremove -y);
?>
