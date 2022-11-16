<?php
involve('core.php');

start('Forgot Password');

?>
  <body>
    <!-- Preloader-->
    <?php navi(); ?>
    <!-- Breadcrumb -->
    <div class="breadcrumb-wrapper breadcrumb-bg-light">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Forgot Password</h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Register -->
    <div class="register-area">
      <div class="container">
        <div class="row g-5 align-items-center justify-content-between">
          <div class="col-12 col-lg-5">
            <div class="register-thumbnail"><img src="template/img/illustrator/hero-2.png" alt=""></div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card register-card bg-gray p-1 p-sm-4">
              <div class="card-body">
                <h4><?php echo isset($_GET['token']) ? 'New Password' : 'Reset Password'; ?></h4>
                <p>Already have an account?<a class="ms-2" href="login.html">Log in</a></p>
                <!-- Register form -->
                <?php if (isset($_GET['token'])) {
    echo '<div class="register-form my-5">
              <form class="newpassword">
                <div class="form-group mb-3">
                  <input class="form-control rounded-0" type="password" placeholder="New password" name="password" required>
                </div>

                <div class="form-group mb-3">
                  <input class="form-control rounded-0" type="password" placeholder="Re-enter password" name="repass" required>
                </div>

                <div class="mess">
                  
                </div>
                <button class="btn btn-primary w-100" type="submit"><i class="bi bi-lock me-2"></i>Continue</button>
              </form>
          </div>';
} else {
    echo '
                                            <div class="register-form my-5">
                                                          <form class="resetpassword">
                                                            <div class="form-group mb-3">
                                                              <input class="form-control rounded-0" type="email" placeholder="Email Address" name="email" required>
                                                            </div>

                                                            <div class="mess">
                                                              
                                                            </div>
                                                            <button class="btn btn-primary w-100" type="submit"><i class="bi bi-lock me-2"></i>Reset Password</button>
                                                          </form>
                                                        </div>';
}

                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-120 d-block"></div>
    <!-- Footer Area-->
    <?php tail(); ?>