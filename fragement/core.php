<?php

function start($title)
{
    echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
    
        <meta name="title" content="Street Code - Buy Google Voice with Mobile Money">
        <meta name="keyword" content="Google Voice, RDP,Textnow,Instagram followers,Instagram Likes, Youtubes Views">
        <meta name="description"
            content="Buy Google Voice Accounts, Affordable RDP, Text Now Accounts, Youtube Views & Watch hours from Us .We accept Mobile Money ">
    
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://streetkode.tk/">
        <meta property="og:title" content="Street Code - Buy Google Voice with Mobile Money">
        <meta property="og:description"
            content="Buy Google Voice Accounts, Affordable RDP, Text Now Accounts, Youtube Views & Watch hours from Us .We accept Mobile Money">
        <meta property="og:image" content="template/img/core-img/logo.png">
    
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="http://streetkode.tk/">
        <meta property="twitter:title" content="Street Code - Buy Google Voice with Mobile Money">
        <meta property="twitter:description"
            content="Buy Google Voice Accounts, Affordable RDP, Text Now Accounts, Youtube Views & Watch hours from Us .We accept Mobile Money">
        <meta property="twitter:image" content="template/img/core-img/logo.png">
        <!-- Title-->
        <title>Street Code - '.$title.'</title>
        <!-- Favicon-->
        <link rel="apple-touch-icon" sizes="57x57" href="template/img/favicon.ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="template/img/favicon.ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="template/img/favicon.ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="template/img/favicon.ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="template/img/favicon.ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="template/img/favicon.ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="template/img/favicon.ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="template/img/favicon.ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="template/img/favicon.ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="template/img/favicon.ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="template/img/favicon.ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="template/img/favicon.ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="template/img/favicon.ico/favicon-16x16.png">
        <link rel="manifest" href="template/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicon.ico/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    
        <!-- All CSS Stylesheet-->
        <link rel="stylesheet" href="template/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="template/css/all-css-libraries.css">
        

        <link rel="stylesheet" href="template/css/float.css">
        <!-- Core Stylesheet-->
        <link rel="stylesheet" href="template/style.css">



        
      </head>';

    function navi()
    {
        session_start();

        if (isset($_SESSION['vuser'])) {
            $ckt = '<a class="btn btn-defualt btn-sm ms-auto mb-3 mb-lg-0" style="border:1px solid grey !important;"  href="account">My account</a>
                    <a class="btn btn-danger btn-sm ms-auto mb-3 mb-lg-0"  href="logout"><i class="bi bi-power"></i></a>';
        } else {
            $ckt = '<a class="btn btn-primary btn-sm ms-auto mb-3 mb-lg-0" href="login">Log In</a>';
        }

        echo '<!-- Preloader-->
        <div class="preloader" id="preloader">
              <div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div>
            </div>
            <!-- Header Area-->
            <header class="header-area header-2">
              <nav class="navbar navbar-expand-lg">
                <div class="container">
                  <!-- Navbar Brand --><a class="navbar-brand" href="home"><img src="template/img/core-img/logo.png" alt=""></a>
                  <!-- Navbar Toggler -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#saasboxNav" aria-controls="saasboxNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
                  <!-- Navbar Nav -->
                  <div class="collapse navbar-collapse" id="saasboxNav">
                    <ul class="navbar-nav navbar-nav-scroll">
                      <li class=""><a href="home">Home</a>
                      <li class=""><a href="#">Google Voice</a>
                      <li class=""><a href="#">RDP</a></li>
                      <li class=""><a href="#">Cpanel</a></li>
                      
                      <li class="sb-dropdown"><a href="#">Other Services</a>
                        <ul class="sb-dropdown-menu">
                            <li class=""><a href="#">Email Leads</a></li>
                            <li class=""><a href="#">Textnow</a></li>
                            <li class=""><a href="#">Youtube</a></li>
                            <li class=""><a href="#">Instagram</a></li>
                        </ul>
                      </li>
                      <!-- <li><a href="">About</a></li> -->
                        <!-- <li class=""><a href="#">Contact</a></li> -->
                      <!-- <li class="sb-dropdown"><a href="#">Shop</a>
                        <ul class="sb-dropdown-menu">
                          <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                          <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                          <li><a href="single-product.html">Product Details</a></li>
                          <li><a href="cart.html">Cart</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                      </li> -->
                      
                      <!-- <li class="sb-dropdown"><a href="#">Pages</a>
                        <ul class="sb-dropdown-menu">
                          <li class="sb-dropdown"><a href="#">About Us</a>
                            <ul class="sb-dropdown-menu">
                              <li><a href="about-standard.html">About Standard</a></li>
                              <li><a href="about-creative.html">About Creative</a></li>
                            </ul>
                          </li>
                          <li class="sb-dropdown"><a href="#">Service</a>
                            <ul class="sb-dropdown-menu">
                              <li><a href="service-standard.html">Service Standard</a></li>
                              <li><a href="service-creative.html">Service Creative</a></li>
                            </ul>
                          </li>
                          <li class="sb-dropdown"><a href="#">Authentification</a>
                            <ul class="sb-dropdown-menu">
                              <li><a href="register.html">Register</a></li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="forget-password.html">Forget Password</a></li>
                            </ul>
                          </li>
                          <li><a href="pricing-plan.html">Pricing Plan</a></li>
                          <li><a href="faq.html">FAQ</a></li>
                          <li><a href="team.html">Team</a></li>
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="reviews.html">Reviews</a></li>
                          <li><a href="coming-soon.html">Coming Soon</a></li>
                          <li><a href="newsletter.html">Newsletter</a></li>
                          <li><a href="404.html">404 - Error</a></li>
                        </ul>
                      </li> -->
                    </ul>
                    <!-- Login Button -->
                    '.$ckt.'
                    <a class="bi bi-cart btn-sm ms-auto mb-3 mb-lg-0" style="border:1px solid grey;" href="cart"><span style="padding:5px;">'.countcart().'</span></a>
                  </div>
                </div>
              </nav>
            </header>';
    }

    function tail()
    {
        echo '<footer class="footer-area footer-2 pt-120 pb-120">
        <div class="container">
          <div class="row g-4 g-lg-5">
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget-area"><a class="d-block mb-4" href="index.html"><img src="template/img/core-img/tlogo.png" alt=""></a>
                <p>It\'s crafted with the latest trend of design &amp; coded with all modern approaches.</p>
                <!-- Newsletter Form -->
                <div class="newsletter-form mb-4">
                  <form class="d-flex align-items-stretch" action="#">
                    <input class="form-control rounded-0 rounded-start" type="email" placeholder="Enter email">
                    <button class="btn btn-warning rounded-0 rounded-end px-3" type="submit"><i class="bi bi-arrow-right"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget-area">
                <h5 class="mb-4 text-white">Our Products</h5>
                <ul class="list-unstyled">
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Suha Mobile</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Affan Mobile</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Newsten Blog</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Classy Multipurpose</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Educamp Education</a></li>
                </ul>
              </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget-area">
                <h5 class="mb-4 text-white">Important Links</h5>
                <ul class="list-unstyled">
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Community &amp; Forum</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>About Licences</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Careers</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Terms &amp; Conditions</a></li>
                  <li><a href="#" target="_blank"><i class="bi bi-caret-right"></i>Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget-area">
                <h5 class="mb-4 text-white">Our Location</h5>
                <p class="lh-base mb-3">Designing World Inc. <br> 1604 NSD, Dhaka, BD</p>
                <p class="mb-0">Call: +123 456 789 <br> Email: help@example.com</p>
                <!-- Footer Social Icon -->
                <div class="footer-social-icon d-flex align-items-center mt-3"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facbook"><i class="bi bi-facebook"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i class="bi bi-twitter"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="bi bi-instagram"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"><i class="bi bi-linkedin"></i></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube"><i class="bi bi-youtube"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copywrite-wrapper mt-5 rounded d-lg-flex align-items-lg-center justify-content-lg-between">
            <!-- Copywrite Text -->
            <div class="copywrite-text text-center text-lg-start mb-3 mb-lg-0 me-lg-4">
              <p class="mb-0">2022 &copy; All rights reserved Street Code</p>
            </div>
            <!-- Footer Nav -->
            <div class="footer-nav mb-3 mb-lg-0 me-lg-4">
              <ul class="mb-0 d-flex flex-wrap justify-content-center list-unstyled">
                <li><a href="#" target="_blank">Privacy Policy</a></li>
                <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
                <li><a href="#" target="_blank">Get Support</a></li>
              </ul>
            </div>
            <!-- Dropup -->
            <div class="language-dropdown text-center text-lg-end">
              <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Language</button>
              <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-sa"></span>Arabic</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-bd"></span>Bengali</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-us"></span>English</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-my"></span>Malay</a><a class="dropdown-item" href="#"><span class="me-2 flag-icon flag-icon-es"></span>Spanish</a></div>
            </div>
          </div>
        </div>
      </footer>
      <!-- floating button -->
  
      
      <!-- Scroll To Top -->
      <div id="scrollTopButton"><i class="bi bi-arrow-up-short"></i></div>
      <!-- Cookie Alert Area-->
      <!-- <div class="cookiealert">
        <p>This site uses cookies. We use cookies to ensure you get the best experience on our website. For details, please check our <a href="#" target="_blank"> Privacy Policy.</a></p>
        <button class="btn btn-primary btn-sm acceptcookies" type="button" aria-label="Close">I agree &amp; Close</button>
      </div> -->
      <!-- All JavaScript Files-->
      <script src="template/js/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <script src="processor/processor.js"></script>
      <script src="template/js/all-js-libraries.js"></script>
      <script src="template/js/active.js"></script>
      
     
      
      
      
     
     
      </body>
  </html>';
    }
}

function countcart()
{
    if (!empty($_SESSION['strcart'])) {
        $count = count($_SESSION['strcart']);
    } else {
        $count = '0';
    }

    return $count;
}

// register users
function register($name, $email, $contact, $password, $repass)
{
    if (empty(trim($name)) || empty(trim($email)) || empty(trim($contact)) || empty(trim($password)) || empty(trim($repass))) {
        echo 'all fields are required';
    } else {
        if ($password != $repass) {
            echo 'password does not match';
        } else {
            if (authenticate('vusers', [['email', '=', $email]]) == 'succeess') {
                echo 'User already exists';
            } else {
                $password = md5($password);
                $data = [
                'name' => $name,
                'email' => $email,
                'contact' => $contact,
                'password' => $password,
                'datejoined' => date('jS F, Y'),
                'status' => 'active',
            ];
                $result = insert('vusers', $data);
                if ($result == 'success') {
                    echo 'registration_success';
                } else {
                    echo 'Failed to register';
                }
            }
        }
    }
}

function login($email, $password)
{
    if (empty(trim($email)) || empty(trim($password))) {
        echo 'All fields are required';
    } else {
        if (authenticate('vusers', [['email', '=', $email]]) == 'success') {
            if (loginauth('vusers', 'vuser', [['email', '=', $email], ['password', '=', md5($password)]], 'AND') == 'success') {
                echo 'loginsuccess';
            } else {
                echo 'Invalid login credentials';
            }
        } else {
            echo 'Email not found in records';
        }
    }
}
function updaterec($name, $email, $contact)
{
    session_start();
    if (empty(trim($name)) || empty(trim($email)) || empty(trim($contact))) {
        echo 'All fields are required';
    } else {
        $data = [
            'name' => $name,
            'email' => $email,
            'contact' => $contact,
        ];
        $result = update('vusers', $data, ['id' => $_SESSION['vuser']['id']]);
        if ($result == 'success') {
            echo 'success';
        } else {
            echo 'Failed to update';
        }
    }
}

function user()
{
    // session_start();
    $user = customfetch('vusers', ['id', '=', $_SESSION['vuser']['id']]);

    return $user = $user[0];
}

function resetpassword($email)
{
    if (empty(trim($email))) {
        echo 'Email is required';
    } else {
        if (authenticate('vusers', [['email', '=', $email]]) == 'success') {
            $token = md5($email.time());
            $data = [
            'token' => $token,
              ];
            $result = update('vusers', $data, ['email' => $email]);
            if ($result == 'success') {
                $subject = 'Password Reset';
                $message = "Click the link below to reset your password <br> <a href='http://streetkode.tk/resetpassword?token=$token'>Reset Password</a>";
                if (sendmail('https://phpyolk.com/', $subject, $message, 'Street Code', [$email]) == 'success') {
                    echo 'resetlink';
                } else {
                    echo 'Failed to send reset link';
                }
            } else {
                echo 'Failed to reset password';
            }
        } else {
            echo 'Email not found in records';
        }
    }
}

function newpassword($password, $repass, $token)
{
    if (empty(trim($password)) || empty(trim($repass))) {
        echo 'All fields are required';
    } else {
        if ($password != $repass) {
            echo 'Password does not match';
        } else {
            $password = md5($password);
        }
    }
}
