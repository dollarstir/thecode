<?php

involve('core.php');

start('Contact Us');

?>
  <body>
    <!-- Preloader-->
    <?php navi();
    if (!isset($_SESSION['vuser'])) {
        echo 'window.location.href = "login";';
    }
    ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Welcome <?php echo user()['name']; ?> </h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Contact Area-->
    <div class="saasbox-contact-us-area">
      <div class="container">  
        
                      
        <div class="row g-4 justify-content-between">
       
          <!-- Contact Side Info-->
          <div class="col-12 col-lg-5 col-xl-4">
          <h2>My Orders</h2> 
            <div class="table-responsive"> 
            <table class="table ">
                <thead>
                <tr>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>#35155</td>
                    <td>November 15, 2022</td>
                    <td>Completed</td>
                    <td>$25.00 for 1 item</td>
                    <td><button type="button"  class="btn btn-dark">View</button></td>
                </tr>
                <tr>
                    <td>#35155</td>
                    <td>November 15, 2022</td>
                    <td>Completed</td>
                    <td>$25.00 for 1 item</td>
                    <td><button type="button"  class="btn btn-dark">View</button></td>
                </tr>
                <tr>
                    <td>#35155</td>
                    <td>November 15, 2022</td>
                    <td>Completed</td>
                    <td>$25.00 for 1 item</td>
                    <td><button type="button"  class="btn btn-dark">View</button></td>
                </tr>
                </tbody>
            </table>
            </div>
          </div>
          <!-- Contact Form-->
          
          <div class="col-12 col-lg-6">
          <h2>Account Details</h2> 
            <div class="contact-form">
              <form class="updaterec">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <label class="form-label" for="name">Full Name:</label>
                    <input class="form-control mb-30" id="name" type="text" placeholder="Name" value="<?php echo user()['name']; ?>" name="name" required>
                  </div>
                  <div class="col-12 col-lg-6">
                    <label class="form-label" for="email">Email Address:</label>
                    <input class="form-control mb-30" id="email" type="email" placeholder="Email Address" name="email" value="<?php echo user()['email']; ?>" required>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="subject">Contact:</label>
                    <input class="form-control mb-30" id="topics" type="text" placeholder="Contact" name="contact" value="<?php echo user()['contact']; ?>">
                  </div>

                  <div class="mess">

                  </div>
                  
                  <div class="col-12 text-center">
                    <button class="btn btn-primary w-100" type="submit">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Google Maps-->
    <!-- <div class="google-maps-wrapper">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14047.882048906753!2d-0.14268817855593444!3d51.50701170390822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1570696571917!5m2!1sen!2sbd" allowfullscreen=""></iframe>
    </div> -->
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php tail(); ?>