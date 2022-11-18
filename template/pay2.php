<?php
involve('core.php');

start('Order Status');

?>
  <body>
  <?php navi(); ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Order Details</h2>
              
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
             <center> <h3 class="mb-4">Order   Details</h3></center>

                <p>
                    <div class="card text-center bg-gray" style="background-color:grey;padding:10px;border-radius:20px;">
                        <!-- <h5>Order Number<span class="bi bi-hash"></span>: <span class="badge badge-dark"><?php echo orderno(); ?> </span></h5>
                        <h5>Total Amount <span class="bi bi-cash"></span> : <span class="badge badge-dark"> &#8373; <?php echo orderamount(); ?></span></h5>

                        <h5>Transaction ID <span class="bi bi-folder"></span> : <span class="badge badge-dark"><?php  orderinfo('transactionid'); ?></span></h5> -->
                            <h5>Payment Status :   
                                <?php
                                if (orderinfo('paymentstatus') == 'paid') {
                                    echo '<button class="btn btn-success btn-sm" type="button" disabled>
                                    
                                    Completed
                                  </button>';
                                } elseif (orderinfo('paymentstatus') == 'pending') {
                                    echo '<button class="btn btn-warning btn-sm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    pending...
                                  </button>';
                                } elseif (orderinfo('paymentstatus') == 'Waiting for confirmation') {
                                    echo '<button class="btn btn-warning btn-sm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    waiting for confirmation...
                                  </button>';
                                } elseif (orderinfo('paymentstatus') == 'cancelled') {
                                    echo '<button class="btn btn-danger btn-sm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Rejected...
                                  </button>';
                                }

                                ?>
                            </h5>



                            <h5> Order Status :   
                                <?php
                                if (orderinfo('status') == 'completed') {
                                    echo '<button class="btn btn-success btn-sm" type="button" disabled>
                                    
                                    Completed
                                  </button>';
                                } elseif (orderinfo('status') == 'pending') {
                                    echo '<button class="btn btn-warning btn-sm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Pending...
                                  </button>';
                                } elseif (orderinfo('status') == 'processing') {
                                    echo '<button class="btn btn-info btn-sm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    processing...
                                  </button>';
                                } elseif (orderinfo('status') == 'cancelled') {
                                    echo '<button class="btn btn-danger btn-sm" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Cancelled...
                                  </button>';
                                }

                                ?>
                            </h5>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                               
                                
                                <th>Order No.<span class="bi bi-hash"></span></th>
                                <th>Total Amount</th>
                                <th>Transaction ID</th>
                                <th>Network</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td><?php echo orderno(); ?> </td>
                                <td>&#8373; <?php echo orderamount(); ?></td>
                                <td><?php echo orderinfo('transactionid'); ?></td>
                                <td><?php echo orderinfo('network'); ?></td>
                                
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                </p>
              <?php echo (orderinfo('paymentstatus') == 'paid') ? '' : '<center class="eph"><button class="btn btn-primary epkc">Edit Payment Details </button></center>'; ?>
              <?php echo (orderinfo('status') == 'completed') ? '<br><center class=""><a class="btn btn-primary" href="account">View Orders </a></center>' : ''; ?>
              <form class="editpay">
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
                  <button class="btn btn-primary w-100 mt-4" type="submit">Save</button>
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