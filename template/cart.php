<?php include 'top.php'; ?>
  <body>
  <?php include 'nav.php'; ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Cart</h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Cart Area-->
    <div class="cart-area clearfix">
      <div class="container">
        <!-- Apply Coupon -->
        <!-- <div class="apply-coupon mb-5">
          <h4>Have a Coupon?</h4>
          <p>Enter your coupon code here &amp; get awesome discounts!</p>
          <div class="coupon-form">
            <form class="d-flex" action="#">
              <input class="form-control rounded-0 rounded-start" type="text" placeholder="Enter Your Coupon Code">
              <button class="btn btn-primary rounded-0 rounded-end" type="submit">Apply</button>
            </form>
          </div>
        </div> -->
        <div class="row">
          <div class="col-12">
            <!-- Cart Table -->
            <div class="cart-table mb-5">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col"><i class="bi bi-trash"></i></th>
                      <th>Image</th>
                      <th>Product</th>
                      <th>Unit Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><i class="bi bi-x"></i></th>
                      <td><img src="http://preview.designing-world.com/saasbox-v2.0.0/img/bg-img/shop1.jpg" alt="Product"></td>
                      <td><a href="#">Bonsai Tree</a></td>
                      <td>$0.99</td>
                      <td>
                        1
                        <!-- <input class="qty-text" type="text" min="1" max="99" name="quantity" value="2"> -->
                      </td>
                      <td>$1.98</td>
                    </tr>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-md-6 col-lg-7"></div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-5">
            <!-- Cart Total Area-->
            <div class="cart-total-area ms-auto">
              <h4 class="mb-3">Cart Totals</h4>
              <div class="table-responsive">
                <table class="table mb-4 table-bordered">
                  <tbody>
                    <tr>
                      <td class="px-3">Sub Total</td>
                      <td class="px-3">$24.05</td>
                    </tr>
                    <tr>
                      <td class="px-3">Shipping</td>
                      <td class="px-3">$2.00</td>
                    </tr>
                    <tr>
                      <td class="px-3">Total</td>
                      <td class="px-3">$26.05</td>
                    </tr>
                  </tbody>
                </table>
              </div><a class="btn btn-primary w-100" href="checkout.php">Proceed To Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Cool Facts Area-->
    <div class="cta-area cta3 py-5 bg-info">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-12 col-sm-8">
            <div class="cta-text mb-4 mb-sm-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
              <h3 class="mb-0">Let's start with the simple way to create a website.</h3>
            </div>
          </div>
          <div class="col-12 col-sm-4 text-sm-end wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><a class="btn btn-warning btn-sm" href="#">Buy Now</a></div>
        </div>
      </div>
    </div>
    <!-- Footer Area-->
    <?php include 'tail.php'; ?>