<?php include 'top.php'; ?>
  <body>
  <?php include 'nav.php'; ?>
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
              <h3 class="mb-4">Billing Details</h3>
              <form action="#" method="post">
                <div class="row">
                  <div class="col-12">
                    <label class="mb-2" for="first-name">First Name</label>
                    <input class="form-control mb-30" id="first-name" type="text" placeholder="First Name" value="" required>
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="last-name">Last Name</label>
                    <input class="form-control mb-30" id="last-name" type="text" placeholder="Last Name" value="" required>
                  </div>
                  
                  <div class="col-12">
                    <label class="mb-2" for="email-address">Email Address</label>
                    <input class="form-control mb-30" id="email-address" type="email" placeholder="Email Address" value="" required>
                  </div>
                  <div class="col-12">
                    <label class="mb-2" for="phone">Phone</label>
                    <input class="form-control mb-30" id="phone" type="text" placeholder="Phone" value="">
                  </div>
                  
                 
                  <div class="col-12">
                    <label class="mb-2" for="order-notes">Order Notes (optional)</label>
                    <textarea class="form-control" id="order-notes" placeholder="Notes about your order, e.g. special notes for delivery." rows="3"></textarea>
                  </div>
                </div>
              </form>
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
                    <tr>
                      <th class="px-3">Bonsai Tree <span> × 1</span></th>
                      <td class="text-end px-3">$9.63</td>
                    </tr>
                    <tr>
                      <th class="px-3">Sony BS4 <span> × 1</span></th>
                      <td class="text-end px-3">$7.31</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="px-3">Subtotal </th>
                      <td class="text-end px-3">$16.94</td>
                    </tr>
                    <tr>
                      <th class="px-3">Shipping </th>
                      <td class="text-end px-3">Flat Rate $5.00</td>
                    </tr>
                    <tr>
                      <th class="px-3">Order Total </th>
                      <td class="text-end px-3">$21.94</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- Checkout Payment-->
              <div class="checkout-payment-area">
                <form action="#">
                  
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" checked id="momo" type="radio" value="momo" name="checkout-payment">
                      <img src="img/svg-icon/momo.png" style="height:60px;width:50%;"/>
                      <!-- <label class="form-check-label font-weight-bold" for="momo">Mobile Money</label> -->
                    </div>
                    <div class="payment-meta">
                      <p>Mobile Money</p>
                    </div>
                  </div>
                  
                  <div class="form-group mt-4">
                    <!-- <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p> -->
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
    <!-- Cool Facts Area -->
    <!-- <div class="cta-area cta4 bg-gray pt-120 pb-120">
      <div class="container">
        <div class="row g-5 align-items-center justify-content-center">
          <div class="col-12 col-sm-9 col-md-6">
            <div class="cta-text">
              <h2 class="text-dark">You want to Sell your Product with Us?</h2>
              <p class="mb-4">You can Display your adds</p><a class="btn btn-primary rounded-pill" href="#">Start Now</a>
            </div>
          </div>
          <div class="col-12 col-sm-9 col-md-6">
            <div class="cta-thumb-group">
              <div class="row">
                <div class="col-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="100ms"><img src="img/bg-img/5.jpg" alt=""></div>
                <div class="col-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"><img src="http://preview.designing-world.com/saasbox-v2.0.0/img/bg-img/13.jpg" alt=""></div>
                <div class="col-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms"><img src="http://preview.designing-world.com/saasbox-v2.0.0/img/bg-img/14.jpg" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php include 'tail.php'; ?>