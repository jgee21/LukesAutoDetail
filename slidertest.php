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

<!-- PAGE CONTENT -->
<div class="w3-main" style="margin-left: 340px; margin-right: 40px;">

  <!-- Header -->
  <div class="w3-container" style="margin-top: 80px;" id="photogallery">
    <h1 class="w3-jumbo"><b>Luke's Auto Detailing</b></h1>
  </div>
  <body>

  <!--Ceramic Coatings-->
  <div class="w3-container" id="Ceramic Coating" style="margin-top:75px">
    <h1 class="w3-xxxlarge" style="color:#00107D"><b>Ceramic Coating</b></h1>
    <hr style="width:50px;border:5px solid #00107D" class="w3-round">
  

    <section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8249;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8250;</button>
    <ul data-slides>
        <li class ="slide" data-active>
            <img src="LAD.jpg" alt="logo">
        </li>
        <li class ="slide">
            <img src="Exterior1.jpg" alt="exterior">
        </li>
        <li class ="slide">
            <img src="Exterior2.jpg" alt="exterior">
        </li>
    </ul>
    </div>
    </section>
  </div>

  <!--Interiors-->
  <div class="w3-container" id="Interiors" style="margin-top:75px">
    <h1 class="w3-xxxlarge" style="color:#00107D"><b>Interiors</b></h1>
    <hr style="width:50px;border:5px solid #00107D" class="w3-round">
  

    <section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8249;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8250;</button>
    <ul data-slides>
        <li class ="slide" data-active>
            <img src="LAD.jpg" alt="logo">
        </li>
        <li class ="slide">
            <img src="Exterior1.jpg" alt="exterior">
        </li>
        <li class ="slide">
            <img src="Exterior2.jpg" alt="exterior">
        </li>
    </ul>
    </div>
    </section>
  </div>

  <!--Wheel Restoration-->
  <div class="w3-container" id="Wheel Restoration" style="margin-top:75px">
    <h1 class="w3-xxxlarge" style="color:#00107D"><b>Wheel Restoration</b></h1>
    <hr style="width:50px;border:5px solid #00107D" class="w3-round">
  

    <section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8249;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8250;</button>
    <ul data-slides>
        <li class ="slide" data-active>
            <img src="LAD.jpg" onclick="onClick(this)" alt="logo">
        </li>
        <li class ="slide">
            <img src="Exterior1.jpg" onclick="onClick(this)" alt="exterior">
        </li>
        <li class ="slide">
            <img src="Exterior2.jpg" onclick="onClick(this)"alt="exterior">
        </li>
    </ul>
    </div>
    </section>
  </div>

<!--Window Tinting-->
<div class="w3-container" id="Wheel Restoration" style="margin-top:0px">
    <h1 class="w3-xxxlarge" style="color:#00107D; margin-top:25px;"><b>Window Tinting</b></h1>
    <hr style="width:50px;border:5px solid #00107D" class="w3-round">
  

    <section aria-label="Newest Photos">
    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8249;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8250;</button>
    <ul data-slides>
        <li class ="slide" data-active>
            <img src="LAD.jpg" alt="logo">
        </li>
        <li class ="slide">
            <img src="Exterior1.jpg" alt="exterior">
        </li>
        <li class ="slide">
            <img src="Exterior2.jpg" alt="exterior">
        </li>
    </ul>
    </div>
    </section>
</div>

</div>
</body>

<?php
require_once "footer.php";
?>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</html>