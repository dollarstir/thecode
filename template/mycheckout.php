<?php
involve('core.php');

start('Checkout');

?>
  <body>
  <?php navi(); ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Checkout</h2>
              
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
          <div class="col-12 col-lg-6">
            <div class="checkout-details-area">
              <?php

              error_reporting(0);
              session_start();
              if (!isset($_SESSION['vuser'])) {
                  echo '<h3 class="mb-4">Login To Continue</h3>
                  <form class="login1">
                  <div class="form-group ">
                    <input class="form-control rounded-0" type="email" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="form-group mb-3">
                    <label class="label-psswd" for="registerPassword"></label>
                    <input class="form-control rounded-0" id="registerPassword" type="password" placeholder="Password" name="password" required>
                  </div>
      
                  <div class="mess">
      
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="bi bi-unlock me-2"></i>Login</button>
                </form>
                <br><br>';
              }

              ?>
            
              <h3 class="mb-4">Billing Details</h3>
              <form class="checkout">
                <div class="row">
                  <div class="col-12">
                    <label class="mb-2" for="first-name">Full Name</label>
                    <input class="form-control mb-30" id="first-name" name="name" type="text" placeholder="Full Name" value="<?php echo (isset($_SESSION['vuser'])) ? user()['name'] : ''; ?>" required>
                  </div>
                  
                  
                  <div class="col-12">
                    <label class="mb-2" for="email-address">Email Address</label>
                    <input class="form-control mb-30" id="email-address" type="email" placeholder="Email Address" name="email"  value="<?php echo (isset($_SESSION['vuser'])) ? user()['email'] : ''; ?>" required>
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="phone">Phone</label>
                    <input class="form-control mb-30" id="phone" type="text" placeholder="Phone" name="contact" value="<?php echo (isset($_SESSION['vuser'])) ? user()['contact'] : ''; ?>">
                  </div>


                  <?php echo (!isset($_SESSION['vuser'])) ? '<div class="col-12">
                    <input  id="tpass" type="checkbox" name="" value="" >
                    <label class="mb-2" for="tpass" style="margin-left: 10px !important;"><u>New Here? Create account Now.</u></label>
                  </div>' : ''; ?>
                  
                  
                  
                  <div class="col-12 ups">
                    <label class="mb-2" for="phone">Password</label>
                    <input  class="form-control mb-30" id="password" type="password" placeholder="New password" name="password" value="<?php echo (isset($_SESSION['vuser'])) ? user()['contact'] : ''; ?>">
                  </div>
                  
                 
                  <div class="col-12" style="margin-top:40px !important;">
                    <label class="mb-2" for="order-notes">Order Notes (optional)</label>
                    <textarea class="form-control" id="order-notes" placeholder="Notes about your order, e.g. You request for specific state available in (Custom States)." name="note" rows="3"></textarea>
                  </div>
                </div>
              
            </div>
          </div>
          <!-- Order Form Area-->
          <div class="col-12 col-lg-6">
            <div class="order-form bg-gray">
              <h4 class="mb-4">Your Order</h4>
              <!-- Order Table-->
              <div class="order-table table-responsive mb-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="px-3">Product </th>
                      <th class="text-end px-3">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                     <?php
                    checkoutcart();
                     ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="px-3">Subtotal </th>
                      <td class="text-end px-3">&#8373;<?php echo carttotal(); ?></td>
                    </tr>
                    <tr>
                      <th class="px-3">Shipping </th>
                      <td class="text-end px-3">Flat Rate &#8373;0.00</td>
                    </tr>
                    <tr>
                      <th class="px-3">Order Total </th>
                      <td class="text-end px-3"><strong>&#8373;<?php echo carttotal(); ?></strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- Checkout Payment-->
              <div class="checkout-payment-area">
                
                  
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" checked id="momo" type="radio" value="momo" name="paymenttype">
                      <img src="template/img/svg-icon/momo.png" style="height:60px;width:50%;"/>
                      <!-- <label class="form-check-label font-weight-bold" for="momo">Mobile Money</label> -->
                    </div>
                    <div class="payment-meta">
                      <p>Mobile Money</p>
                    </div>
                  </div>
                  
                  <div class="form-group mt-4">
                    <!-- <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p> -->
                  </div>
                  <div class="mess">

                  </div>
                  <!-- Place Order-->
                  <button class="btn btn-primary w-100 mt-4" type="submit">Proceed to payment</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php tail(); ?>