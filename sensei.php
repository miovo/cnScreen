<?php
    include("assets/configs/senseiConfig.php");
?>

<center>
<div class="container mt-3">

<div id="sensei" class="carousel slide" data-ride="carousel" data-interval="9000">
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/imgs/sensei/image.jpg" width="75%">
        <div class="carousel-caption d-none d-md-block">
          <h3>Lead Sensei <?php print($lead); ?></h3>
        </div>
    </div>
    <div class="carousel-item">
      <img src="assets/imgs/sensei/image2.jpg" width="75%">
        <div class="carousel-caption d-none d-md-block">
          <h3>Sensei <?php print($sensei2); ?></h3>
        </div>
    </div>
  </div>
  
</div>

</div>
</center>

