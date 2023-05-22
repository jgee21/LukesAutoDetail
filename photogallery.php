<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAD Photo Gallery</title>
</head>
<body>
  
<?php 
require_once "sidebar.php";
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

   <div class="w3-main" style="margin-left:340px;margin-right:40px">    
   <h1 class="w3-jumbo"><b>Luke's Auto Detailing</b></h1>
   </div>

<div class="w3-container" id="Ceramic Coating" style="margin-top:75px">
    <h1 class="w3-xxxlarge" style="color:#000000"><b>Ceramic Coating</b></h1>
    <hr style="width:50px;border:5px solid #000000" class="w3-round">
  </div>       
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="ceramiccoating1.jpg" style="width:100%" onclick="onClick(this)" alt="This Tesla is protected by Luke's Auto Detailing.">
      <img src="ceramiccoating3.jpg" style="width:100%" onclick="onClick(this)" alt="This truck has been debaged and coated to protect the paint.">
      
    </div>
    
    <div class="w3-half">        
      <img src="ceramiccoating2.jpg" style="width:100%" onclick="onClick(this)" alt="This classic has been protected to keep that shine!">
      <img src="ceramiccoating4.jpg" style="width:100%" onclick="onClick(this)" alt="This 2023 Elantra N has been corrected and coated!">
      
    </div>
  </div> <!-- Close Photo grid (modal) -->
 
  <div class="w3-container" id="Interior" style="margin-top:75px">
    <h1 class="w3-xxxlarge" style="color:#000000"><b>Interior</b></h1>
    <hr style="width:50px;border:5px solid #000000" class="w3-round">
  </div>       
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="interior1.jpg" style="width:100%" onclick="onClick(this)" alt="Interior of an SUV deep cleaned.">
      <img src="interior3.jpg" style="width:100%" onclick="onClick(this)" alt="Broken glass is unsafe and requires professional removal.">
      
    </div>
    
    <div class="w3-half">        
      <img src="interior2.jpg" style="width:100%" onclick="onClick(this)" alt="Leather seats steam cleaned.">
      <img src="interior4.jpg" style="width:100%" onclick="onClick(this)" alt="Broken glass deep clean including air vents!">
      
    </div>
  </div> <!-- Close Photo grid (modal) -->
  
  <div class="w3-container" id="Wheel Restoration" style="margin-top:75px">
    <h1 class="w3-xxxlarge" style="color:#000000"><b>Wheel Restoration</b></h1>
    <hr style="width:50px;border:5px solid #000000" class="w3-round">
  </div>       

<!-- Photo grid (modal) -->
<div class="w3-row-padding">
  <div class="w3-half">
    <img src="wheels1.jpg" style="width:100%" onclick="onClick(this)" alt="Heavy break dust removed.">
    <img src="wheels3.jpg" style="width:100%" onclick="onClick(this)" alt="This wheel was preped and ready for paint!">
  </div>
  <div class="w3-half">        
    <img src="wheels2.jpg" style="width:100%" onclick="onClick(this)" alt="Metal polished and sealed.">
    <img src="wheels4.jpg" style="width:100%" onclick="onClick(this)" alt="Freshly painted gloss black.">
  </div>   
</div>
<div class="w3-container" id="Window Tinting" style="margin-top:75px">
  <h1 class="w3-xxxlarge" style="color:#000000"><b>Window Tinting</b></h1>
  <hr style="width:50px;border:5px solid #000000" class="w3-round">
</div>            
<!-- Photo grid (modal) -->
<div class="w3-row-padding">
  <div class="w3-half">
    <img src="windowtint1.jpg" style="width:100%" onclick="onClick(this)" alt="20% ceramic tint all around.">
    <img src="windowtint3.jpg" style="width:100%" onclick="onClick(this)" alt="Shaved edge for the OEM look!">
  </div>
  <div class="w3-half">        
    <img src="windowtint2.jpg" style="width:100%" onclick="onClick(this)" alt="20% ceramic tint all around.">
    <img src="windowtint4.jpg" style="width:100%" onclick="onClick(this)" alt="Suv tinted all around.">
  </div>               
</div>
<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
  <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption"></p>
  </div>
</div>
</div>
<?php
require_once "footer.php";
?>

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

</body>
</html>