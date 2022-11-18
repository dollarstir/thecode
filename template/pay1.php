<?php
involve('core.php');

start('Complete your order');

?>
  <body>
  <?php navi(); ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Payment</h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Checkout Area-->
    <div class="checkout-area">
      <div class="container">
        <div class="row g-5">
          <!-- Checkout Details Area-->
          <div class="col-12 col-lg-12">
            <div class="checkout-details-area">
             <center> <h3 class="mb-4">Payment  Instruction</h3></center>

              <p><div class="card text-center bg-gray" style="background-color:grey;padding:10px;border-radius:20px;"><h5>Order Number:<?php echo orderno(); ?> </h5><h5>Kindly Pay the total amount of &#8373;<?php echo orderamount(); ?> to Below Account</h5><br> <strong>Mobile Money Number : <br>0556676471 <br><br>Account Name : <br>Wisdom Kagblor <br><br>Transaction Reference : <br>DSE<?php echo orderno(); ?></strong></div></p><br>
              <center class="ph"><button class="btn btn-primary pkc">I have paid</button></center>
              <form class="pay">
                <div class="row">
                  <div class="col-12">
                    <label class="mb-2" for="first-name">Enter Transaction ID after payment</label>
                    <input class="form-control mb-30" id="first-name" type="text" name="transactionid" placeholder="Mobile Money Transaction ID" value="" required>
                  </div>
                  
                  <div class="col-12">
                    <label class="mb-2" for="country">Select your network operator</label>
                    <select class="form-select form-control w-100 mb-30" id="country" name="network">
                      <option value="mtn">MTN MOBILE MONEY</option>
                      <option value="vodafone">VODAFONE CASH</option>
                      <option value="tigo">TIGO CASH</option>
                      
                    </select>
                  </div>
                 <div class="mess">
                  
                 </div>
                  <div class="col-12">
                  <button class="btn btn-primary w-100 mt-4" type="submit">Proceed</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <!-- Order Form Area-->
         




          
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
   
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php tail(); ?>