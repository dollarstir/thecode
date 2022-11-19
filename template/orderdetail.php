<?php
involve('core.php');

start('Order Detail');

?>
  <body>
  <?php navi(); ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Order (#
                <?php $order = $_GET['dse'];

                if (strlen($order) == 1) {
                    echo '00'.$order;
                } elseif (strlen($order) == 2) {
                    echo '0'.$order;
                } else {
                    echo $order;
                } ?>
                

                )
              </h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Cart Area-->
    <div class="cart-area clearfix">
      <div class="container">
       

        


        <div class="row">
          <div class="col-12">
            <!-- Cart Table -->
            <div class="mess"></div>
            <div class="cart-table mb-5">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      
                      <th>Product</th>
                      <th>Bill Email</th>                      
                      <th>date</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php vieworderdetail($_GET['dse']); ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 col-md-6 col-lg-7"></div>
          <div class="col-12 col-sm-8 col-md-6 col-lg-5">
            <!-- Cart Total Area-->
            <div class="cart-total-area ms-auto">
              <h4 class="mb-3">Order Totals</h4>
              <div class="table-responsive">
                <table class="table mb-4 table-bordered">
                  <tbody>
                    
                    <tr>
                      <td class="px-3">Total</td>
                      <td class="px-3"><?php echo detailtotal($_GET['dse']); ?></td>
                    </tr>
                  </tbody>
                </table>
              </div><a class="btn btn-primary w-100" href="account">Back To Orders</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    
    <!-- Footer Area-->
    <?php tail(); ?>