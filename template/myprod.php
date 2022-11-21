<?php
involve('core.php');

start('Product');

?>

<body>
  <?php navi();
$category = $_GET['optimizationtoken'];

  ?>


  <!-- Features Area-->

  <div class="mb-120 d-block"></div>

  <div class="saasbox-pricing-plan-area price2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-9 col-md-8 col-lg-7">
          <div class="section-heading text-center">

            <h2><?php echo _prodcat($category); ?> Packages</h2>

          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-12">
          <div class="row g-4 justify-content-center">
            <!-- Single Pricing Plan-->
            <?php product($category); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mb-120 d-block"></div>



  <div class="mb-120 d-block"></div>
  <!-- Footer Area-->
  <?php tail(); ?>