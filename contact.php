<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAD Contact</title>
</head>
<body>
  
<?php 
require_once "sidebar.php";
?>

<!-- PAGE CONTENT -->
<div class="w3-main" style="margin-left: 340px; margin-right: 40px;">

  <!-- Header -->
  <div class="w3-container" style="margin-top: 80px;" id="photogallery">
    <h1 class="w3-jumbo"><b>Luke's Auto Detailing</b></h1>
  </div>

  <!-- Contact -->
<div class="w3-container" id="contact" style="margin-top:75px">
  <h1 class="w3-xxxlarge" style="color:#01007D"><b>Contact</b></h1>
  <hr style="width:50px;border:5px solid #01007D" class="w3-round">
  <p>*This function does not work, please bear with us.* Send us a message with any questions or to book an appointment today!</p>
  <form action="action.php" method="post">
    <div class="w3-section">
      <label for="Name">Name</label>
      <input class="w3-input w3-border" type="text" id="Name" name="Name" required>
    </div>
    <div class="w3-section">
      <label for="Email">Email</label>
      <input class="w3-input w3-border" type="email" id="Email" name="Email" required>
    </div>
    <div class="w3-section">
      <label for="Message">Message</label>
      <textarea class="w3-input w3-border" id="Message" name="Message" required></textarea>
    </div>
    <button type="submit" class="w3-button w3-padding-large" style="background-color:#01007D; color:white;">Send Message</button>
  </form>
</div>

</div>

<?php
require_once "footer.php";
?>

</body>
</html>