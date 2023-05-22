<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Luke's Auto Detailing</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
      body, h1, h2, h3, h4, h5 {
        font-family: "Poppins", sans-serif;
      }
      body {
        font-size: 16px;
      }
      .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer;
      }
      .w3-half img:hover {
        opacity: 1;
      }
    </style>
  </head>

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

  <body>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left: 340px; margin-right: 40px;">
      <!-- Header -->
      <div class="w3-container" style="margin-top: 80px;" id="photogallery">
        <h1 class="w3-jumbo"><b>Luke's Auto Detailing</b></h1>
      </div>
      <!-- Home -->
      <div class="w3-container" style="margin-top: 75px;">
        <h1 class="w3-xxxlarge" style="color: #01007D;"><b>Home</b></h1>
        <hr style="width: 50px; border: 5px solid #01007D;" class="w3-round">
        <p>We are Luke's Auto Detailing. We strive to provide the best detailing and auto reconditioning services in the Central Ohio area. We pride ourselves on our high quality work, products, and customer service. We are dedicated to provide high-quality service, and customer satisfaction. Contact us for your free quote today!</p>
      </div>
      <!-- About Us -->
      <div class="w3-container" style="margin-top: 75px;">
        <h1 class="w3-xxxlarge" style="color: #01007D;"><b>About Us</b></h1>
        <hr style="width: 50px; border: 5px solid #01007D;" class="w3-round">
        <p>Luke Holmberg</p>
        <p>We are an Auto Detailing company based out of Granville, Oh. We specialize in paint corrections along with several ceramic coatings, interior and exterior, fabric stain removal, odor removal, deep leather cleaning and protections to choose from to best fit your vehicle's needs. We travel to surrounding towns such as Newark, Heath, Johnstown, and New Albany, etc. Contact us to clean and protect your investments.</p>
        <p><b>Follow our socials:</b></p>
      </div>
      <!-- Intro and Socials -->
      <div class="w3-row-padding w3-grayscale">
        <div class="w3-col m4 w3-margin-bottom">
          <div class="w3-light-grey">
            <img src="LAD.jpg" alt="tiktok" style="width:100%;">
            <div class="w3-container">
              <h3>TikTok</h3>
              <p class="w3-opacity"><a href="https://www.tiktok.com/@lukesautodetail"> @lukesautodetail</p></a>
          <p>Follow us on Tik Tok to see stunning transformations!</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="LAD.jpg" alt="Instagram" style="width:100%">
        <div class="w3-container">
          <h3>Instagram</h3>
          <p class="w3-opacity"><a href="https://www.instagram.com/lukesautodetailing.oh"> @lukesautodetailing.oh</p></a>
          <p>Follow us on Instagram to see stunning transformations!</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="LAD.jpg" alt="facebook" style="width:100%">
        <div class="w3-container">
          <h3>FaceBook</h3>
          <p class="w3-opacity"><a href="https://www.facebook.com/lukesautodetailing.OH">@lukesautodetailing.OH</p></a>
          <p>Follow us on Facebook to see stunning transformations!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer Content -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:75px;text-align: center;"><p class="w3-middle">Luke's Auto Detailing</p><img src="LAD.jpg" style="width:25%" onclick="onClick(this)" alt="Company Logo"></div>


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
