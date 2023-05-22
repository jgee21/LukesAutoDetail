<!DOCTYPE html>
<html lang="en">
<head>
<title>Lukes Auto Detailing</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="imageslider.css">
    <script src="carousel.js" defer></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:250px;font-weight:bold;background-color:#01007D" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 style="color:white" class="w3-padding-64"><b>Luke's<br>Auto Detailing</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="LADmach1.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="services.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="ceramiccoatings.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Ceramic Coating's</a>
    <a href="autodetailing.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Auto Detailing</a>
    <a href="wheelrest.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Wheel Restoration</a>
    <a href="tinting.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Window Tinting</a>
    <a href="packages.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Packages</a> 
    <a href="contact.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="photogallery.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Photo Gallery</a> 
    <a href="employeelogin.php" onclick="w3_close()" style="color:white" class="w3-bar-item w3-button w3-hover-white">Employee Portal</a>
  </div>
</nav>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-xlarge w3-padding" style="background-color:#01007D;color:white;">
  <a href="javascript:void(0)" class="w3-button w3-margin-right" style="color:white" onclick="w3_open()">☰</a>
  <span>Luke's Auto Detailing</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
</body>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</html>