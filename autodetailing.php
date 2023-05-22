<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAD Auto Detailing</title>
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

  <!-- Auto Detailing -->
  <div class="w3-container" id="Auto Detailing" style="margin-top: 75px;">
    <h1 class="w3-xxxlarge" style="color: #01007D;"><b>Auto Detailing</b></h1>
    <hr style="width: 50px; border: 5px solid #01007D;" class="w3-round">
    <p>We offer a wide range of premium services.</p>
    <p>We offer a range of car detailing packages to keep your car both looking and feeling its best. When it comes to car detailing, our packages are sure to clean every inch of your vehicle.</p>
    <b>Interior & Exterior Detailing</b>  
    <section>
      <h1></h1>
      <details>
        <summary>Learn more</summary>
        <p>
          Exterior - we offer a wide range of services including exterior wash's and perform a full decontamination of all painted, glass, plastic and metal surfaces. we also do full metal polishing. We recondition the paint back to life with deep depth of gloss and true color. We preserve and protect the paint, glass, plastic, and metal surfaces, with a wide range of protectants such wax's, sealants, and ceramic coatings.
        </p>
        <p>
          Interior - vehicle detailing offered at Luke's Auto Detailing gives you back the most valuable asset of all - your time. Instead of spending hours crawling around the inside of your car in a desperate attempt to restore its former glory with cheap, ineffective store bought sanitizers and air fresheners, leave it to the pros! And if your automobile needs more detailing than just the inside, remember that we have specialized package vehicle detailing services that provide your ride with a remarkable glow both inside and out. Connect with one of our interior vehicle detailing professionals now for more information about all of our services.
        </p>
      </details>
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
            <img src="interior1.jpg" alt="logo">
        </li>
        <li class ="slide">
            <img src="interior2.jpg" alt="exterior">
        </li>
        <li class ="slide">
            <img src="interior3.jpg" alt="exterior">
        </li>
        <li class ="slide">
            <img src="interior4.jpg" alt="logo">
        </li>
    </ul>
    </div>
    </section>
  </div>

</div>

<?php
require_once "footer.php";
?>

</body>
</html>

