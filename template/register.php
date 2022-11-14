<?php include 'top.php'; ?>
  <body>
    <!-- Preloader-->
    <?php include 'nav.php'; ?>
    <!-- Breadcrumb Area-->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Create free account</h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Register -->
    <div class="register-area">
      <div class="container">
        <div class="row g-4 g-lg-5 align-items-center justify-content-between">
          <div class="col-12 col-lg-6">
            <div class="register-thumbnail"><img src="img/illustrator/1.png" alt=""></div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card register-card bg-gray p-2 p-sm-4">
              <div class="card-body">
                <h4>Create your free account</h4>
                <p>Already have an account?<a class="ms-2" href="login">Log In</a></p>
                <!-- Register Form-->
                <div class="register-form my-5">
                  <form action="#" method="post">
                    
                    <div class="form-group mb-3">
                      <input class="form-control rounded-0" type="text" placeholder="Full Name" name="name" required>
                    </div>
                    <div class="form-group mb-3">
                      <input class="form-control rounded-0" type="email" placeholder="Email Address" name="email" required>
                    </div>

                    <div class="form-group mb-3">
                      <input class="form-control rounded-0" type="number" placeholder="Phone number" name="contact" required>
                    </div>
                    <div class="form-group mb-3">
                      <label class="label-psswd" for="registerPassword"><i class="bi bi-eye"></i></label>
                      <input class="form-control rounded-0" id="registerPassword" type="password" placeholder="Password" name="password" required>
                    </div>


                    <div class="form-group mb-3">
                      <label class="label-psswd" for="registerPassword"><i class="bi bi-eye"></i></label>
                      <input class="form-control rounded-0" id="registerPassword" type="password" placeholder="Re-enter password" name="repass" required>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Register Now</button>
                  </form>
                </div>
                <!-- Sign in via others-->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php include 'tail.php'; ?>