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
        '.Yolk::uicore('cssa').'
        
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
            <!--<div class="preloader" id="preloader">
              <div class="spinner-grow text-light" role="status"><span class="visually-hidden">Loading...</span></div>
            </div>-->
            <!-- Header Area-->
            <header class="header-area header-2">
              <nav class="navbar navbar-expand-lg">
                <div class="container">
                  <!-- Navbar Brand --><a class="navbar-brand" href="home"><img src="template/img/core-img/logo.png" alt=""></a>
                  <!-- Navbar Toggler -->
                  <a href="cart"  class="navbar-toggler"><i class="bi bi-cart"></i> <span class="badge badge-primary" style="margin-top: -12px !important; position: absolute !important; font-size: 12px !important;height: 20px !important;">'.countcart().'</span></a>
                 
                  <button style="margin-left:30px !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#saasboxNav" aria-controls="saasboxNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
                  <!-- Navbar Nav -->
                  <div class="collapse navbar-collapse" id="saasboxNav">
                    <ul class="navbar-nav navbar-nav-scroll">
                      <li class=""><a href="home">Home</a>
                      <li class=""><a href="product?optimizationtoken=1">Google Voice</a>
                      <li class=""><a href="product?optimizationtoken=8">Available now</a></li>
                      
                      
                      
                      <li class="sb-dropdown"><a href="#">Other Services</a>
                        <ul class="sb-dropdown-menu">
                            <li class=""><a href="product?optimizationtoken=3">RDP</a></li>
                            <li class=""><a href="product?optimizationtoken=4">Cpanel</a></li>

                            <li class=""><a href="product?optimizationtoken=5">Email Leads</a></li>
                            
                            <li class=""><a href="product?optimizationtoken=2">Textnow</a></li>
                            <li class=""><a href="product?optimizationtoken=6">Youtube</a></li>
                            <li class=""><a href="product?optimizationtoken=7">Instagram</a></li>
                        </ul>
                      </li>


                      <li class=""><a href="contact">Support</a></li>
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
                    <a class="btn btn-default  ms-auto mb-3 mb-lg-0" href="cart"><i class="bi bi-cart"></i> <span class="badge badge-primary" style="margin-top: 15px !important; position: absolute !important; font-size: 12px !important;height: 20px !important;">'.countcart().'</span></a>
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
                <p>'.app1('about').'</p>
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
                  <li><a href="product?optimizationtoken=1" target="_blank"><i class="bi bi-caret-right"></i>Google Voice</a></li>
                  <li><a href="product?optimizationtoken=3" target="_blank"><i class="bi bi-caret-right"></i>RDP</a></li>
                  <li><a href="product?optimizationtoken=2" target="_blank"><i class="bi bi-caret-right"></i>Text Now</a></li>
                  <li><a href="product?optimizationtoken=4" target="_blank"><i class="bi bi-caret-right"></i>Cpanel</a></li>
                  <li><a href="product?optimizationtoken=6" target="_blank"><i class="bi bi-caret-right"></i>Youtube</a></li>
                </ul>
              </div>
            </div>
            <!-- Footer Widget Area-->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget-area">
                <h5 class="mb-4 text-white">Important Links</h5>
                <ul class="list-unstyled">
                  <li><a href="contact" target="_blank"><i class="bi bi-caret-right"></i>Contact US</a></li>
                  <li><a href="contact" target="_blank"><i class="bi bi-caret-right"></i>Support</a></li>
                  <li><a href="about" target="_blank"><i class="bi bi-caret-right"></i>About</a></li>
                  <li><a href="product?optimizationtoken=8" target="_blank"><i class="bi bi-caret-right"></i>Available States</a></li>
                  <li><a href="home" target="_blank"><i class="bi bi-caret-right"></i>Home</a></li>
                </ul>
              </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="footer-widget-area">
                <h5 class="mb-4 text-white">Our Location</h5>
                <p class="lh-base mb-3">'.app1('appname').' <br> '.app1('appaddress').'</p>
                <p class="mb-0">Call: '.app1('appcontact').' <br> Email: '.app1('appemail').'</p>
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
              <p class="mb-0">'.date('Y').' &copy; All rights reserved '.app1('appname').'</p>
            </div>
            <!-- Footer Nav -->
            <div class="footer-nav mb-3 mb-lg-0 me-lg-4">
              <ul class="mb-0 d-flex flex-wrap justify-content-center list-unstyled">
                <li><a href="#" target="_blank">Privacy Policy</a></li>
                <li><a href="#" target="_blank">Terms &amp; Conditions</a></li>
                <li><a href="https://wa.me/message/6UDCDX7L66GKF1" target="_blank">Get Support</a></li>
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
      '.Yolk::uicore('jsa').'
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

                if ($result = insert('vusers', $data) == 'success') {
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

function login1($email, $password)
{
    if (empty(trim($email)) || empty(trim($password))) {
        echo 'All fields are required';
    } else {
        if (authenticate('vusers', [['email', '=', $email]]) == 'success') {
            if (loginauth('vusers', 'vuser', [['email', '=', $email], ['password', '=', md5($password)]], 'AND') == 'success') {
                echo 'loginsuccess1';
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
    session_start();
    $user = customfetch('vusers', [['id', '=', $_SESSION['vuser']['id']]]);

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
            'codestatus' => 'active',
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
            if (authenticate('vusers', [['token', '=', $token]]) == 'success') {
                $d = customfetch('vusers', ['token', '=', $token]);
                $d = $d[0];
                if ($d['codestatus'] == 'active') {
                    $password = md5($password);
                    $data = [
                    'password' => $password,
                    'codestatus' => 'inactive',
                  ];
                    $result = update('vusers', $data, ['token' => $token]);
                    if ($result == 'success') {
                        echo 'token_success';
                    } else {
                        echo 'Failed to reset password';
                    }
                } else {
                    echo 'Token has expired';
                }
            } else {
                echo 'Invalid Token';
            }
        }
    }
}

function addtocart($id)
{
    session_start();
    if (empty(trim($id))) {
        echo 'Product not found';
    } else {
        if (authenticate('vproducts', [['id', '=', $id]]) == 'success') {
            if (authenticate('vproducts', [['status', '=', 'inactive']]) == 'success') {
                echo 'Product is not available';
            } else {
                if (empty($_SESSION['strcart'])) {
                    $_SESSION['strcart'] = [];
                }
                if (in_array($id, $_SESSION['strcart'])) {
                    echo 'alreadyincart';
                } else {
                    array_push($_SESSION['strcart'], $id);
                    echo 'addedtocart';
                }
            }
        } else {
            echo 'Product not found';
        }
    }
}

function cartitem()
{
    error_reporting(0);
    session_start();
    if (!empty($_SESSION['strcart'])) {
        $cart = $_SESSION['strcart'];
        // $cart = implode(',', $cart);
        // $cart = customfetch('vproducts', [['id', 'IN', $cart]]);
        $total = 0;
        foreach ($cart as $c) {
            $k = customfetch('vproducts', [['id', '=', $c]]);
            $k = $k[0];
            $total += $k['price'];

            echo '<tr>
                  <th scope="row"><button class="btn btn-default btn-sm removefromcart" id="'.$k['id'].'" style="color:red;"><i class="bi bi-x"></i></button></th>
                  <td><img src="yolkassets/upload/'.$k['image'].'" alt="Product" style="width:50px;height:50px;"></td>
                  <td><a href="">'.$k['name'].'</a></td>
                  <td>&#8373;'.$k['price'].'</td>
                  <td>
                    1
                    <!-- <input class="qty-text" type="text" min="1" max="99" name="quantity" value="2"> -->
                  </td>
                  <td>&#8373;'.$k['price'].'</td>
                 </tr>';
        }

        // return $cart;
    } else {
        echo 'No item in cart';
    }
}

function carttotal()
{
    error_reporting(0);
    session_start();
    if (!empty($_SESSION['strcart'])) {
        $cart = $_SESSION['strcart'];
        // $cart = implode(',', $cart);
        // $cart = customfetch('vproducts', ['id', 'IN', "($cart)"]);
        $total = 0;
        foreach ($cart as $c) {
            $k = customfetch('vproducts', [['id', '=', $c]]);
            $k = $k[0];
            $total += $k['price'];
        }

        return $total;
    } else {
        return 0;
    }
}

// display product
function product($cat)
{
    $c = customfetch('vproducts', [['category', '=', $cat]]);
    if ($c == []) {
        echo' prodcut not available';
    }

    foreach ($c as $p) {
        echo  '<!-- Single Pricing Plan-->
      <div class="col-12 col-sm-9 col-md-7 col-lg-4">
        <div class="card pricing-card monthly-plan shadow-lg wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="pricing-heading mb-5">
            <h3>'.$p['name'].'</h3><br>
            <div class="price-quantity">
                
                <h3 class="mb-0 monthly-price">&#8373; '.$p['price'].'<span class="fz-12"></span></h3>
                
            </div>
            <!-- <div class="price"><span class="bg-primary rounded-circle"><i class="bi bi-lock"></i></span>
                
             
            </div> -->
          </div>
          <div class="pricing-desc mb-5">
            <ul class="list-unstyled mb-0">
              '.prodoptions($cat).'
            </ul>
          </div>
          
            

          
          <div class="pricing-btn"><button class="btn btn-primary addtocart" id ="'.$p['id'].'">Buy Now<i class="bi bi-caret-right-fill"></i></button></div>
        </div>
      </div>';
    }
}

function checkoutcart()
{
    error_reporting(0);
    session_start();
    if (!empty($_SESSION['strcart'])) {
        $cart = $_SESSION['strcart'];
        // $cart = implode(',', $cart);
        // $cart = customfetch('vproducts', [['id', 'IN', $cart]]);
        $total = 0;
        foreach ($cart as $c) {
            $k = customfetch('vproducts', [['id', '=', $c]]);
            $k = $k[0];
            $total += $k['price'];

            echo '<tr>
            <th class="px-3">'.$k['name'].' <span> × 1</span></th>
            <td class="text-end px-3">&#8373;'.$k['price'].'</td>
            </tr>';
        }

        // return $cart;
    } else {
        echo 'No item in cart';
    }
}

function removefromcart($id)
{
    session_start();
    if (empty(trim($id))) {
        echo 'Product not found';
    } else {
        if (authenticate('vproducts', [['id', '=', $id]]) == 'success') {
            if (empty($_SESSION['strcart'])) {
                $_SESSION['strcart'] = [];
            }
            if (in_array($id, $_SESSION['strcart'])) {
                $key = array_search($id, $_SESSION['strcart']);
                unset($_SESSION['strcart'][$key]);
                echo 'removedfromcart';
            } else {
                echo 'notincart';
            }
        } else {
            echo 'Product not found';
        }
    }
}

function checkout($name, $email, $contact, $note, $paymenttype, $password)
{
    error_reporting(0);
    session_start();
    $msg = '';
    $total = 0;
    $ordno = 0;
    if (empty(trim($name)) || empty(trim($email)) || empty(trim($contact))) {
        $msg = 'All fields are required';
    } else {
        if (empty(trim($password))) {
            if (isset($_SESSION['strcart'])) {
                $cart = $_SESSION['strcart'];
                $token = bin2hex(random_bytes(8)).time();
                $dateadded = date('jS F, Y').' at '.date('h:i:s A');
                $cco = countall('vorders');
                $ordno = $cco + 1;

                foreach ($cart as $c) {
                    $k = customfetch('vproducts', [['id', '=', $c]]);
                    $k = $k[0];
                    $total += $k['price'];

                    $record = [
                    'userid' => $_SESSION['vuser']['id'],
                    'productid' => $k['id'],
                    'ordno' => $ordno,
                    'token' => $token,
                    'product' => $k['name'],
                    'email' => $email,
                    'contact' => $contact,
                    'price' => $k['price'],
                    'note' => $note,
                    'dateadded' => $dateadded,
                    'status' => 'pending',
                    'paymenttype' => $paymenttype,
                    'paymentstatus' => 'notpaid',
                ];

                    $msg .= insert('vorders', $record);
                }
            } else {
                $msg = 'No item in cart';
            }
        } else {
            // register new user before orders
            if (isset($_SESSION['vuser'])) {
                if (isset($_SESSION['strcart'])) {
                    $cart = $_SESSION['strcart'];
                    $token = bin2hex(random_bytes(8)).time();
                    $dateadded = date('jS F, Y').' at '.date('h:i:s A');
                    $cco = countall('vorders');
                    $ordno = $cco + 1;
                    foreach ($cart as $c) {
                        $k = customfetch('vproducts', [['id', '=', $c]]);
                        $k = $k[0];
                        $total += $k['price'];

                        $record = [
                    'userid' => $_SESSION['vuser']['id'],
                    'productid' => $k['id'],
                    'ordno' => $ordno,
                    'token' => $token,
                    'product' => $k['name'],
                    'email' => $email,
                    'contact' => $contact,
                    'price' => $k['price'],
                    'note' => $note,
                    'dateadded' => $dateadded,
                    'status' => 'pending',
                    'paymenttype' => $paymenttype,
                    'paymentstatus' => 'notpaid',
                ];

                        $msg .= insert('vorders', $record);
                    }
                } else {
                    $msg = 'No item in cart';
                }
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
                if ($ko = insert('vusers', $data) == 'success') {
                    loginauth('vusers', 'vuser', ['email', '=', $email], ['password', '=', $password]);
                    if (isset($_SESSION['strcart'])) {
                        $cart = $_SESSION['strcart'];
                        $token = bin2hex(random_bytes(8)).time();
                        $dateadded = date('jS F, Y').' at '.date('h:i:s A');
                        $cco = countall('vorders');
                        $ordno = $cco + 1;
                        foreach ($cart as $c) {
                            $k = customfetch('vproducts', [['id', '=', $c]]);
                            $k = $k[0];
                            $total += $k['price'];

                            $record = [
                            'userid' => $_SESSION['vuser']['id'],
                            'productid' => $k['id'],
                            'ordno' => $ordno,
                            'token' => $token,
                            'product' => $k['name'],
                            'email' => $email,
                            'contact' => $contact,
                            'price' => $k['price'],
                            'note' => $note,
                            'dateadded' => $dateadded,
                            'status' => 'pending',
                            'paymenttype' => $paymenttype,
                            'paymentstatus' => 'notpaid',
                        ];

                            $msg .= insert('vorders', $record);
                        }
                    } else {
                        $msg = 'No item in cart';
                    }
                } else {
                    $msg = 'Failed to create user account';
                }
            }
        }
    }

    if (strpos($msg, 'success') !== false) {
        // sms("Street Code", '0556676471', 'New order from '.$name.' with order number '.$ordno.' and total amount of '.$total);
        unset($_SESSION['strcart']);
        $_SESSION['token'] = $token;
        $_SESSION['total'] = $total;
        echo 'Orderinitiated';
    } else {
        echo $msg;
    }
}

function orderno()
{
    error_reporting(0);
    session_start();
    $c = customfetch('vorders', [['token', '=', $_SESSION['token']]]);
    $c = $c[0];

    if (strlen($c['ordno']) == 1) {
        $ordno = '00'.$c['ordno'];
    } elseif (strlen($c['ordno']) == 2) {
        $ordno = '0'.$c['ordno'];
    } else {
        $ordno = $c['ordno'];
    }

    return $ordno;
}

function orderamount()
{
    error_reporting(0);
    session_start();
    $c = customfetch('vorders', [['token', '=', $_SESSION['token']]]);
    $total = 0;
    foreach ($c as $k) {
        $total += $k['price'];
    }

    return $total;
}

function pay($transactionid, $network)
{
    error_reporting(0);
    session_start();
    $msg = '';
    $c = customfetch('vorders', [['token', '=', $_SESSION['token']]]);
    foreach ($c as $k) {
        $record = [
        'transactionid' => $transactionid,
        'network' => $network,
        'paymentstatus' => 'Waiting for confirmation',
          'paymentref' => 'DSE'.orderno(),
        'paymentdate' => date('jS F, Y'),
      ];
        $msg .= update('vorders', $record, ['id' => $k['id']]);
    }

    if (strpos($msg, 'success') !== false) {
        // unset($_SESSION['token']);
        // sms('Street Code',$c[0]['contact'], 'Your payment for order with order number '.orderno().' is being reviewed. You will be notified when your order is ready. Thank you for shopping with us.');
        // sms('Street Code',$c[0]['contact'], 'Your order with order number '.orderno().' has been received and is being processed. You will be notified when your order is ready for pickup. Thank you for shopping with us.');

        // sms("Street Code", '0556676471', 'Payment request for order  '.$c[0]['ordno'].' amount'.mytotal($c[0]['token']).'transaction id '.$transactionid.' . network '.$network);
        sendmail('tuceehub.org', 'Payment Request', 'Payment request for order#  '.$c[0]['ordno'].' amount GHc'.mytotal($c[0]['token']).' transaction id '.$transactionid.' . network '.$network, 'Street Code', ['services@streetkode.tk']);

        sendmail('tuceehub.org', 'Payment Request', 'Payment request for order#  '.$c[0]['ordno'].' amount GHc'.mytotal($c[0]['token']).' transaction id '.$transactionid.' . network '.$network, 'Street Code', [$c[0]['email']]);
        unset($_SESSION['total']);
        echo 'paymentsuccess';
    } else {
        echo $msg;
    }
}

function orderinfo($data)
{
    error_reporting(0);
    session_start();
    $c = customfetch('vorders', [['token', '=', $_SESSION['token']]]);
    $c = $c[0];

    return $c[$data];
}

function editpay($transactionid, $network)
{
    error_reporting(0);
    session_start();
    $msg = '';
    $c = customfetch('vorders', [['token', '=', $_SESSION['token']]]);
    foreach ($c as $k) {
        $record = [
        'transactionid' => $transactionid,
        'network' => $network,
      ];
        $msg .= update('vorders', $record, ['id' => $k['id']]);
    }

    if (strpos($msg, 'success') !== false) {
        // unset($_SESSION['token']);
        unset($_SESSION['total']);
        echo 'success';
    } else {
        echo $msg;
    }
}

function checkduplicate()
{
    $mylist = [];
    $c = customfetch('vorders', [['userid', '=', $_SESSION['vuser']['id']]], '', ['id' => 'DESC']);
    foreach ($c as $k) {
        if (!in_array($k['ordno'], $mylist)) {
            array_push($mylist, $k['ordno']);
        }
    }

    return $mylist;
}

function checkduplicate1()
{
    $mylist = [];
    $c = fetchall('vorders', ['id' => 'DESC']);
    foreach ($c as $k) {
        if (!in_array($k['ordno'], $mylist)) {
            array_push($mylist, $k['ordno']);
        }
    }

    return $mylist;
}

function mytotal($token)
{
    $total = 0;
    $c = customfetch('vorders', [['token', '=', $token]]);
    foreach ($c as $k) {
        $total += $k['price'];
    }

    return $total;
}

function myorders()
{
    error_reporting(0);
    session_start();
    $mylist = checkduplicate();
    $ms = '';
    foreach ($mylist as $k) {
        $c = customfetch('vorders', [['ordno', '=', $k]]);
        $c = $c[0];
        $total = mytotal($c['token']);
        $ordno = $c['ordno'];
        if (strlen($ordno) == 1) {
            $ordno = '00'.$ordno;
        }
        if (strlen($ordno) == 2) {
            $ordno = '0'.$ordno;
        }
        $status = $c['status'];
        if ($status == 'pending') {
            $status = '<span class="badge badge-warning">Pending</span>';
        }
        if ($status == 'processing') {
            $status = '<span class="badge badge-info">Processing</span>';
        }
        if ($status == 'completed') {
            $status = '<span class="badge badge-success">Completed</span>';
        }
        if ($status == 'cancelled') {
            $status = '<span class="badge badge-danger">Cancelled</span>';
        }
        $ms .= '<tr>
        <td><a href="#">#'.$ordno.'</a></td>
        <td>'.$c['dateadded'].'</td>
        <td>'.$status.'</td>
        <td>'.$total.' </td>
        <td><a  href="view-order?dse='.$c['ordno'].'" class="btn btn-dark btn-sm" style="text-decoration:none!important;color:#ffff !important;"><i class="bi bi-eye"></i></a></td>
    </tr>';
    }

    return $ms;
}

function vieworderdetail($ordno)
{
    $c = customfetch('vorders', [['ordno', '=', $ordno]]);

    foreach ($c as $k) {
        echo '<tr>
        <td>'.$k['product'].'</td>
        <td>'.$k['email'].'</td>
        <td>'.$k['dateadded'].'</td>
        <td>'.$k['price'].'</td>

        </tr>';
    }
}

function detailtotal($ordno)
{
    $total = 0;
    $c = customfetch('vorders', [['ordno', '=', $ordno]]);
    foreach ($c as $k) {
        $total += $k['price'];
    }

    return $total;
}

function checkpaymentstatus()
{
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
}

function checkorderstatus()
{
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
}

function prodoptions($category)
{
    $d = customfetch('vpdetails', [['categoryid', '=', $category]]);
    $ms = '';
    foreach ($d as $e) {
        $ms .= '<li><i class="text-info me-2 bi bi-check-circle-fill"></i>'.$e['detail'].'</li>';
    }

    return $ms;
}

function custom()
{
    $d = fetchall('custom');
    $ms = '';
    foreach ($d as $e) {
        $ms .= '<li><i class="text-info me-2 bi bi-check-circle-fill"></i>'.$e['state'].'</li>';
    }

    return $ms;
}

function _prodcat($category)
{
    $c = customfetch('vcategory', [['id', '=', $category]]);
    $c = $c[0];

    return $c['catname'];
}

function _productlist($category)
{
    echo '<div class="col-12 col-sm-9 col-md-7 col-lg-4">
        <div class="card pricing-card monthly-plan shadow-lg wow fadeInUp" data-wow-duration="1000ms"
          data-wow-delay="300ms">
          <div class="pricing-heading mb-5">
            <h3>Available states</h3><br>
            <div class="price-quantity">

              <h4 class="mb-0 monthly-price"><span class="fz-12" style="color:red;">Kindly place google voice order. On checkout page add name of state as <strong>Order  Note</strong> . Note: The ealier you place order the higher the chance of you getting the available state.so we cannot assure you getting requested state</span> </h4>

            </div>

          </div><br><br>
          <div class="pricing-desc mb-5" style="margin-top:20px !important;">
            <ul class="list-unstyled mb-0">'
          .custom().
        ' </ul>
          </div>
          
        </div>
      </div>';
}

function admintop($title)
{
    echo '<!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Streetcode - '.$title.'</title>
  
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  
    <link rel="stylesheet" href="vadmin/plugins/fontawesome-free/css/all.min.css">
  
    <link rel="stylesheet" href="vadmin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
    <link rel="stylesheet" href="vadmin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  
    <link rel="stylesheet" href="vadmin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    '.Yolk::uicore('cssa').'
  
    <link rel="stylesheet" href="vadmin/plugins/jqvmap/jqvmap.min.css">
  
    <link rel="stylesheet" href="vadmin/dist/css/adminlte.min%EF%B9%96v=3.2.0.css">
  
    <link rel="stylesheet" href="vadmin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
    <link rel="stylesheet" href="vadmin/plugins/daterangepicker/daterangepicker.css">
  
    <link rel="stylesheet" href="vadmin/plugins/summernote/summernote-bs4.min.css">
  
    <!-- others -->

    <link rel="stylesheet" href="vadmin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="vadmin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
     
    <link rel="stylesheet" href="vadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
      href="vadmin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="vadmin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
    <link rel="stylesheet" href="vadmin/dist/css/adminlte.min%EF%B9%96v=3.2.0.css">
  
    
  </head>';
}

function adminnav()
{
    echo '<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      
      <li class="nav-item">
        <a href="streetadmin" class="nav-link">
          
          <p>
            Dashboard
            
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="nav-icon fas fa-copy"></i> -->
          <p>
            Orders
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-warning right">'.customcount('vorders', [['status', '=', 'pending']]).'</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="neworders" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
              <p>New orders</p>
              <span class="badge badge-warning right">'.customcount('vorders', [['status', '=', 'pending']]).'</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="processingorders" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
              <p>Processing </p>
              <span class="badge badge-info right">'.customcount('vorders', [['status', '=', 'processing']]).'</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="completedorders" class="nav-link">
            <i class="nav-icon far fa-circle text-success"></i>
              <p>Completed</p>
              <span class="badge badge-success right">'.customcount('vorders', [['status', '=', 'completed']]).'</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="cancelledorders" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
              <p>Cancelled</p>
              <span class="badge badge-danger right">'.customcount('vorders', [['status', '=', 'cancelled']]).'</span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
          <p>
              Products
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="addproduct" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add New</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adminproducts" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View</p>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a href="users" class="nav-link">
          <!-- <i class="nav-icon fas fa-tree"></i> -->
          <p>
           Users
            <!-- <i class="fas fa-angle-left right"></i> -->
          </p>
        </a>
        
      </li>

      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="nav-icon fas fa-edit"></i> -->
          <p>
            Category
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="addcategory" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add New</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="category" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View</p>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="nav-icon fas fa-table"></i> -->
          <p>
            Custom States
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="addcustom" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add New</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customstates" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>View</p>
            </a>
          </li>
          
        </ul>
      </li>
      
      <li class="nav-item">
        <a href="#" class="nav-link">
          <!-- <i class="nav-icon far fa-envelope"></i> -->
          <p>
            Settings
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="app" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>App Settings</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/mailbox/compose.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Support</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/mailbox/read-mail.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Read</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Pages
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/examples/invoice.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Invoice</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/profile.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/e-commerce.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>E-commerce</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/projects.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Projects</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/project-add.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Project Add</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/project-edit.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Project Edit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/project-detail.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Project Detail</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/contacts.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          
        </ul>
      </li> -->
      <!-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-plus-square"></i>
          <p>
            Extras
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Login & Register v1
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password v1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Login & Register v2
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login-v2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register-v2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password-v2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password v2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/examples/lockscreen.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Lockscreen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/legacy-user-menu.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Legacy User Menu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/language-menu.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Language Menu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/404.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Error 404</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/500.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Error 500</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/pace.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pace</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/examples/blank.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Blank Page</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="starter.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Starter Page</p>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-search"></i>
          <p>
            Search
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/search/simple.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Simple Search</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/search/enhanced.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Enhanced</p>
            </a>
          </li>
        </ul>
      </li> -->
     
          
      
      
    </ul>
  </nav>';
}

function admintail()
{
    echo '<footer class="main-footer">
    <strong>Copyright &copy; 2022 -  '.date('Y').' <a href="">Streetcode</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
     
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">

  </aside>

</div>


<script src="vadmin/plugins/jquery/jquery.min.js"></script>

<script src="vadmin/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge("uibutton", $.ui.button)
</script>

<script src="vadmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vadmin/plugins/select2/js/select2.full.min.js"></script>

<!-- datatables -->
<script src="vadmin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vadmin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vadmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vadmin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vadmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vadmin/plugins/jszip/jszip.min.js"></script>
<script src="vadmin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vadmin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vadmin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vadmin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vadmin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Datatables -->
<!--sleect-->


<!-- forms -->

<script src="vadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- forms -->
<script src="vadmin/plugins/chart.js/Chart.min.js"></script>

<script src="vadmin/plugins/sparklines/sparkline.js"></script>

<script src="vadmin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="vadmin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="vadmin/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="vadmin/plugins/moment/moment.min.js"></script>
<script src="vadmin/plugins/daterangepicker/daterangepicker.js"></script>

<script src="vadmin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="vadmin/plugins/summernote/summernote-bs4.min.js"></script>

<script src="vadmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="vadmin/dist/js/adminlte.js?v=3.2.0"></script>

<script src="vadmin/dist/js/demo.js"></script>

<script src="vadmin/dist/js/pages/dashboard.js"></script>
'.yolk::uicore('jsa').'
<script src="processor/processor.js"></script>


<!-- others -->


<script>
$(function () {
bsCustomFileInput.init();
});
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
    $("#example2").DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2()

    //Initialize Select2 Elements
    $(".select2bs4").select2({
      theme: "bootstrap4"
    })

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", { "placeholder": "dd/mm/yyyy" })
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", { "placeholder": "mm/dd/yyyy" })
    //Money Euro
    $("[data-mask]").inputmask()

    //Date picker
    $("#reservationdate").datetimepicker({
        format: "L"
    });

    //Date and time picker
    $("#reservationdatetime").datetimepicker({ icons: { time: "far fa-clock" } });

    //Date range picker
    $("#reservation").daterangepicker()
    //Date range picker with time picker
    $("#reservationtime").daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: "MM/DD/YYYY hh:mm A"
      }
    })
    //Date range as a button
    $("#daterange-btn").daterangepicker(
      {
        ranges   : {
          "Today"       : [moment(), moment()],
          "Yesterday"   : [moment().subtract(1, "days"), moment().subtract(1, "days")],
          "Last 7 Days" : [moment().subtract(6, "days"), moment()],
          "Last 30 Days": [moment().subtract(29, "days"), moment()],
          "This Month"  : [moment().startOf("month"), moment().endOf("month")],
          "Last Month"  : [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
        },
        startDate: moment().subtract(29, "days"),
        endDate  : moment()
      },
      function (start, end) {
        $("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"))
      }
    )

    //Timepicker
    $("#timepicker").datetimepicker({
      format: "LT"
    })

    //Bootstrap Duallistbox
    $(".duallistbox").bootstrapDualListbox()

    //Colorpicker
    $(".my-colorpicker1").colorpicker()
    //color picker with addon
    $(".my-colorpicker2").colorpicker()

    $(".my-colorpicker2").on("colorpickerChange", function(event) {
      $(".my-colorpicker2 .fa-square").css("color", event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch("state", $(this).prop("checked"));
    })

  })
  // BS-Stepper Init
  document.addEventListener("DOMContentLoaded", function () {
    window.stepper = new Stepper(document.querySelector(".bs-stepper"))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren\'t queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing\'s uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn\'t need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>


</body>

</html>';
}

function adminorderpstauts($token)
{
    $btn = '';
    $c = customfetch('vorders', [['token', '=', $token]]);
    $c = $c[0];
    $status = $c['paymentstatus'];

    switch ($status) {
      case 'Waiting for confirmation':
          $btn = '<button class="btn btn-success btn-sm payapprove" id="'.$token.'">Approve</button><br><button class="btn btn-danger btn-sm payreject" id="'.$token.'">Reject</button>';
        break;

      case 'paid':
          $btn = '<button class="btn btn-danger btn-sm payreject" id="'.$token.'">Reject</button>';
        break;

      case 'cancelled':
          $btn = '<button class="btn btn-success btn-sm payapprove" id="'.$token.'">Approve</button>';
        break;
  }

    return $btn;
}

function adminorderstatus($token)
{
    $btn = '';
    $c = customfetch('vorders', [['token', '=', $token]]);
    $c = $c[0];
    $status = $c['status'];

    switch ($status) {
      case 'pending':
          $btn = '<button class="btn btn-success btn-sm approve" id="'.$token.'">Approve</button><br><button class="btn btn-danger btn-sm reject" id="'.$token.'">Reject</button>';
        break;

      case 'processing':
          $btn = '<button class="btn btn-success btn-sm btncomplete" id="'.$token.'">Complete</button><button class="btn btn-danger btn-sm reject" id="'.$token.'">Reject</button>';
        break;

      case 'cancelled':
          $btn = '<button class="btn btn-success btn-sm approve" id="'.$token.'">Approve</button>';
        break;
  }

    return $btn;
}
function adminorderitems($number)
{
    $n = customfetch('vorders', [['ordno', '=', $number]]);
    $mm = '';
    foreach ($n as $d) {
        $mm .= '<li>'.$d['product'].'</li>';
    }

    return $mm;
}
function adminorders($status)
{
    $finito = '';
    $mylist = checkduplicate1();

    foreach ($mylist as $o) {
        if ($status == 'all') {
            $c = customfetch('vorders', [['ordno', '=', $o]], 'AND', ['id' => 'DESC']);
        } elseif ($status == 'pending') {
            $c = customfetch('vorders', [['status', '=', 'pending']], 'AND', ['id' => 'DESC']);
        } elseif ($status == 'completed') {
            $c = customfetch('vorders', [['status', '=', 'completed']], 'AND', ['id' => 'DESC']);
        } elseif ($status == 'processing') {
            $c = customfetch('vorders', [['status', '=', 'processing']], 'AND', ['id' => 'DESC']);
        } elseif ($status == 'cancelled') {
            $c = customfetch('vorders', [['status', '=', 'cancelled']], 'AND', ['id' => 'DESC']);
        }

        if ($c == []) {
            // echo 'No order found';
        } else {
            $c = $c[0];

            $mst = $c['status'];
            if ($mst == 'pending') {
                $mst = '<span class="badge badge-warning">Pending</span>';
            }
            if ($mst == 'processing') {
                $mst = '<span class="badge badge-info">Processing</span>';
            }
            if ($mst == 'completed') {
                $mst = '<span class="badge badge-success">Completed</span>';
            }
            if ($mst == 'cancelled') {
                $mst = '<span class="badge badge-danger">Cancelled</span>';
            }
            $pst = $c['paymentstatus'];
            switch ($pst) {
            case 'pending':
                $pst = '<span class="badge badge-warning">Pending</span>';
                break;
            case 'paid':
                $pst = '<span class="badge badge-success">Paid</span>';
                break;
            case 'Waiting for confirmation':
                $pst = '<span class="badge badge-info">Awaiting aproval</span>';
                break;
            case 'cancelled':
                $pst = '<span class="badge badge-danger">Cancelled</span>';
                break;
            default:
                $pst = '<span class="badge badge-warning">Pending</span>';
                break;
        }

            $finito .= '<tr>
        <td>'.$c['ordno'].'</td>
        <td>'.$c['email'].' </td>
        <td>'.$c['contact'].'</td>
        <td>'.adminorderitems($c['ordno']).' </td>
        <td>'.$c['note'].'</td>
        <td>'.mytotal($c['token']).'</td>
        <td>'.$c['transactionid'].'</td>
        <td>'.$pst.'<br> <br>'.adminorderpstauts($c['token']).'</td>
        <td>'.$mst.'<br><br>'.adminorderstatus($c['token']).'</td>
        <td>'.$c['dateadded'].'</td>
      </tr>';
        }
    }

    return $finito;
}

function neworders()
{
    $finito = '';
    $mylist = [];

    $c = customfetch('vorders', [['status', '=', 'pending']], 'AND', ['id' => 'DESC']);

    foreach ($c as $o) {
        // $c = customfetch('vorders', [['status', '=', 'pending']]);
        if ($c == []) {
            // echo 'No order found';
        } else {
            // $c = $c[0];
            if (!in_array($o['ordno'], $mylist)) {
                array_push($mylist, $o['ordno']);

                $mst = $o['status'];
                if ($mst == 'pending') {
                    $mst = '<span class="badge badge-warning">Pending</span>';
                }
                if ($mst == 'processing') {
                    $mst = '<span class="badge badge-info">Processing</span>';
                }
                if ($mst == 'completed') {
                    $mst = '<span class="badge badge-success">Completed</span>';
                }
                if ($mst == 'cancelled') {
                    $mst = '<span class="badge badge-danger">Cancelled</span>';
                }
                $pst = $o['paymentstatus'];
                switch ($pst) {
        case 'pending':
            $pst = '<span class="badge badge-warning">Pending</span>';
            break;
        case 'paid':
            $pst = '<span class="badge badge-success">Paid</span>';
            break;
        case 'Waiting for confirmation':
            $pst = '<span class="badge badge-info">Awaiting aproval</span>';
            break;
        case 'cancelled':
            $pst = '<span class="badge badge-danger">Cancelled</span>';
            break;
        default:
            $pst = '<span class="badge badge-warning">Pending</span>';
            break;
    }

                $finito .= '<tr>
    <td>'.$o['ordno'].'</td>
    <td>'.$o['email'].' </td>
    <td>'.$o['contact'].'</td>
    <td>'.adminorderitems($o['ordno']).' </td>
    <td>'.$o['note'].'</td>
    <td>'.mytotal($o['token']).'</td>
    <td>'.$o['transactionid'].'</td>
    <td>'.$pst.'<br> <br>'.adminorderpstauts($o['token']).'</td>
    <td>'.$mst.'<br><br>'.adminorderstatus($o['token']).'</td>
    <td>'.$o['dateadded'].'</td>
  </tr>';
            }
        }
    }

    return $finito;
}

function processingorders()
{
    $finito = '';
    $mylist = [];

    $c = customfetch('vorders', [['status', '=', 'processing']], 'AND', ['id' => 'DESC']);

    foreach ($c as $o) {
        // $c = customfetch('vorders', [['status', '=', 'pending']]);
        if ($c == []) {
            // echo 'No order found';
        } else {
            // $c = $c[0];
            if (!in_array($o['ordno'], $mylist)) {
                array_push($mylist, $o['ordno']);

                $mst = $o['status'];
                if ($mst == 'pending') {
                    $mst = '<span class="badge badge-warning">Pending</span>';
                }
                if ($mst == 'processing') {
                    $mst = '<span class="badge badge-info">Processing</span>';
                }
                if ($mst == 'completed') {
                    $mst = '<span class="badge badge-success">Completed</span>';
                }
                if ($mst == 'cancelled') {
                    $mst = '<span class="badge badge-danger">Cancelled</span>';
                }
                $pst = $o['paymentstatus'];
                switch ($pst) {
        case 'pending':
            $pst = '<span class="badge badge-warning">Pending</span>';
            break;
        case 'paid':
            $pst = '<span class="badge badge-success">Paid</span>';
            break;
        case 'Waiting for confirmation':
            $pst = '<span class="badge badge-info">Awaiting aproval</span>';
            break;
        case 'cancelled':
            $pst = '<span class="badge badge-danger">Cancelled</span>';
            break;
        default:
            $pst = '<span class="badge badge-warning">Pending</span>';
            break;
    }

                $finito .= '<tr>
    <td>'.$o['ordno'].'</td>
    <td>'.$o['email'].' </td>
    <td>'.$o['contact'].'</td>
    <td>'.adminorderitems($o['ordno']).' </td>
    <td>'.$o['note'].'</td>
    <td>'.mytotal($o['token']).'</td>
    <td>'.$o['transactionid'].'</td>
    <td>'.$pst.'<br> <br>'.adminorderpstauts($o['token']).'</td>
    <td>'.$mst.'<br><br>'.adminorderstatus($o['token']).'</td>
    <td>'.$o['dateadded'].'</td>
  </tr>';
            }
        }
    }

    return $finito;
}

function completedorders()
{
    $finito = '';
    $mylist = [];

    $c = customfetch('vorders', [['status', '=', 'completed']], 'AND', ['id' => 'DESC']);

    foreach ($c as $o) {
        // $c = customfetch('vorders', [['status', '=', 'pending']]);
        if ($c == []) {
            // echo 'No order found';
        } else {
            // $c = $c[0];
            if (!in_array($o['ordno'], $mylist)) {
                array_push($mylist, $o['ordno']);

                $mst = $o['status'];
                if ($mst == 'pending') {
                    $mst = '<span class="badge badge-warning">Pending</span>';
                }
                if ($mst == 'processing') {
                    $mst = '<span class="badge badge-info">Processing</span>';
                }
                if ($mst == 'completed') {
                    $mst = '<span class="badge badge-success">Completed</span>';
                }
                if ($mst == 'cancelled') {
                    $mst = '<span class="badge badge-danger">Cancelled</span>';
                }
                $pst = $o['paymentstatus'];
                switch ($pst) {
          case 'pending':
              $pst = '<span class="badge badge-warning">Pending</span>';
              break;
          case 'paid':
              $pst = '<span class="badge badge-success">Paid</span>';
              break;
          case 'Waiting for confirmation':
              $pst = '<span class="badge badge-info">Awaiting aproval</span>';
              break;
          case 'cancelled':
              $pst = '<span class="badge badge-danger">Cancelled</span>';
              break;
          default:
              $pst = '<span class="badge badge-warning">Pending</span>';
              break;
      }

                $finito .= '<tr>
      <td>'.$o['ordno'].'</td>
      <td>'.$o['email'].' </td>
      <td>'.$o['contact'].'</td>
      <td>'.adminorderitems($o['ordno']).' </td>
      <td>'.$o['note'].'</td>
      <td>'.mytotal($o['token']).'</td>
      <td>'.$o['transactionid'].'</td>
      <td>'.$pst.'<br> <br>'.adminorderpstauts($o['token']).'</td>
      <td>'.$mst.'<br><br>'.adminorderstatus($o['token']).'</td>
      <td>'.$o['dateadded'].'</td>
    </tr>';
            }
        }
    }

    return $finito;
}

function cancelledorders()
{
    $finito = '';
    $mylist = [];

    $c = customfetch('vorders', [['status', '=', 'cancelled']], 'AND', ['id' => 'DESC']);

    foreach ($c as $o) {
        // $c = customfetch('vorders', [['status', '=', 'pending']]);
        if ($c == []) {
            // echo 'No order found';
        } else {
            // $c = $c[0];
            if (!in_array($o['ordno'], $mylist)) {
                array_push($mylist, $o['ordno']);

                $mst = $o['status'];
                if ($mst == 'pending') {
                    $mst = '<span class="badge badge-warning">Pending</span>';
                }
                if ($mst == 'processing') {
                    $mst = '<span class="badge badge-info">Processing</span>';
                }
                if ($mst == 'completed') {
                    $mst = '<span class="badge badge-success">Completed</span>';
                }
                if ($mst == 'cancelled') {
                    $mst = '<span class="badge badge-danger">Cancelled</span>';
                }
                $pst = $o['paymentstatus'];
                switch ($pst) {
        case 'pending':
            $pst = '<span class="badge badge-warning">Pending</span>';
            break;
        case 'paid':
            $pst = '<span class="badge badge-success">Paid</span>';
            break;
        case 'Waiting for confirmation':
            $pst = '<span class="badge badge-info">Awaiting aproval</span>';
            break;
        case 'cancelled':
            $pst = '<span class="badge badge-danger">Cancelled</span>';
            break;
        default:
            $pst = '<span class="badge badge-warning">Pending</span>';
            break;
    }

                $finito .= '<tr>
    <td>'.$o['ordno'].'</td>
    <td>'.$o['email'].' </td>
    <td>'.$o['contact'].'</td>
    <td>'.adminorderitems($o['ordno']).' </td>
    <td>'.$o['note'].'</td>
    <td>'.mytotal($o['token']).'</td>
    <td>'.$o['transactionid'].'</td>
    <td>'.$pst.'<br> <br>'.adminorderpstauts($o['token']).'</td>
    <td>'.$mst.'<br><br>'.adminorderstatus($o['token']).'</td>
    <td>'.$o['dateadded'].'</td>
  </tr>';
            }
        }
    }

    return $finito;
}

function processing($token)
{
    if (update('vorders', ['status' => 'processing'], ['token' => $token]) == 'success') {
        $c = customfetch('vorders', [['token', '=', $token]]);
        $u = customfetch('vusers', [['email', '=', $c[0]['email']]]);
        $bd = '<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="streetkode.tk/template/css/bootstrap.min.css">
        <style>

        body{
          font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
        }
        
       

        h1{
          display: block;
          text-align: center;
          padding-top: 36px;
          padding-bottom: 36px;
          padding-left: 48px;
          padding-right: 48px;
        }

        .pm{
          color: #747474;
          text-align: left;
          font-size: 14px;
          line-height: 24px;
          font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
          font-weight: 400;
          margin:0 0 16px;
        }
        p{
        </style>
   </head><body>
    <center><img src="http://streetkode.tk/template/img/core-img/logo.png">
    <h1>Thank you for your order</h1>
    <p class="pm">Hi '.$u[0]['name'].', Your order has been  processed. We will try to deliver very fast. It may take a maximum of 5 minute to 2 hours. Your order details are shown below for your reference:</p>
      <h3>Order details</h3></center>
    <center><h4 style="padding:10px;"><p>Order Number : '.$c[0]['ordno'].'</p>

    <p>status : '.$c[0]['status'].'</p>

     <p>Payment status : '.$c[0]['paymentstatus'].'</p>


    <p>Total Amount : '.mytotal($c[0]['token']).'</p></h4>
    
    <table style="color:#747474;border:0;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;border-top-width:1px;border-top-style:dashed;width:100%;padding-left:0;padding-right:0;text-align:right"
		width="100%" cellspacing="0" cellpadding="6" border="0"><thead><tr><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Quantity</th><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Price</th><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Price</th></tr></thead><tbody>';
        foreach ($c as $d) {
            $bd .= '<tr><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="left">'.$d['product'].'</td><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="center">1</td><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="right">'.$d['price'].'</td></tr>';
        }
        $bd .= '</tbody></table>';
        $bd .= '<h3>Billing Address</h3>';
        $bd .= '<p>'.$u[0]['name'].'</p>';
        $bd .= '<p>'.$c[0]['email'].'</p>';
        $bd .= '<p>'.$c[0]['contact'].'</p>';
        $bd .= '<p>Thank you for shopping with us</p>';
        $bd .= '<p>Regards</p>';
        $bd .= '<p>Team Streetcode</p>';
        $bd .= '<p>www.streetkode.tk</p></center></body></html>';

        $subject = 'Order Processing';
        $to = $c[0]['email'];

        sendmail('phpyolk.com', $subject, $bd, 'Street Code', [$to], 'support@streetkode.tk', 'support@streetkode.tk');
        echo 'statussuccess';
    } else {
        echo 'statusfailed';
    }
}

function complete($token)
{
    if (update('vorders', ['status' => 'completed'], ['token' => $token]) == 'success') {
        $c = customfetch('vorders', [['token', '=', $token]]);
        $u = customfetch('vusers', [['email', '=', $c[0]['email']]]);

        $bd = '<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="streetkode.tk/template/css/bootstrap.min.css">
        <style>

        body{
          font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
        }
        
       

        h1{
          display: block;
          text-align: center;
          padding-top: 36px;
          padding-bottom: 36px;
          padding-left: 48px;
          padding-right: 48px;
        }

        .pm{
          color: #747474;
          text-align: left;
          font-size: 14px;
          line-height: 24px;
          font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
          font-weight: 400;
          margin:0 0 16px;
        }
        p{
        </style>
   </head><body>
    <center><img src="http://streetkode.tk/template/img/core-img/logo.png">
    <h1>Thank you for your order</h1>
    <p class="pm">Hi '.$u[0]['name'].'. Your recent order on streetkode.tk has been completed. We\'ve also sent you another email (Order #'.$c[0]['ordno'].') where your delivery file has been sent. Your order details are shown below for your reference:

      If you do not see another email in your inbox, check the spam folder.</p>
      <h3>Order details</h3></center>
    <center><h4 style="padding:10px;"><p>Order Number : '.$c[0]['ordno'].'</p>

    <p>status : '.$c[0]['status'].'</p>

     <p>Payment status : '.$c[0]['paymentstatus'].'</p>


    <p>Total Amount : '.mytotal($c[0]['token']).'</p></h4>
    
    <table style="color:#747474;border:0;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;border-top-width:1px;border-top-style:dashed;width:100%;padding-left:0;padding-right:0;text-align:right"
		width="100%" cellspacing="0" cellpadding="6" border="0"><thead><tr><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Quantity</th><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Price</th><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Price</th></tr></thead><tbody>';
        foreach ($c as $d) {
            $bd .= '<tr><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="left">'.$d['product'].'</td><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="center">1</td><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="right">'.$d['price'].'</td></tr>';
        }
        $bd .= '</tbody></table>';
        $bd .= '<h3>Billing Address</h3>';
        $bd .= '<p>'.$u[0]['name'].'</p>';
        $bd .= '<p>'.$c[0]['email'].'</p>';
        $bd .= '<p>'.$c[0]['contact'].'</p>';
        $bd .= '<p>Thank you for shopping with us</p>';
        $bd .= '<p>Regards</p>';
        $bd .= '<p>Team Streetcode</p>';
        $bd .= '<p>www.streetkode.tk</p></center></body></html>';

        $subject = 'Order Completed';
        $to = $c[0]['email'];

        sms('Street Code', $c[0]['contact'], 'Your order has been completed. Your order number is '.$c[0]['ordno'].'. Kindly check your email for more details.');
        sendmail('phpyolk.com', $subject, $bd, 'Street Code', [$to], 'support@streetkode.tk', 'support@streetkode.tk');
        echo 'statussuccess';
    } else {
        echo 'statusfailed';
    }
}

function reject($token)
{
    if (update('vorders', ['status' => 'cancelled'], ['token' => $token]) == 'success') {
        echo 'statussuccess';
    } else {
        echo 'statusfailed';
    }
}

function payapprove($token)
{
    if (update('vorders', ['paymentstatus' => 'paid'], ['token' => $token]) == 'success') {
        $c = customfetch('vorders', [['token', '=', $token]]);
        $u = customfetch('vusers', [['email', '=', $c[0]['email']]]);
        $bd = '<html><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="streetkode.tk/template/css/bootstrap.min.css">
        <style>

        body{
          font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
        }
        
       

        h1{
          display: block;
          text-align: center;
          padding-top: 36px;
          padding-bottom: 36px;
          padding-left: 48px;
          padding-right: 48px;
        }

        .pm{
          color: #747474;
          text-align: left;
          font-size: 14px;
          line-height: 24px;
          font-family: "Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;
          font-weight: 400;
          margin:0 0 16px;
        }
        p{
        </style>
   </head><body>
    <center><img src="http://streetkode.tk/template/img/core-img/logo.png">
    <h1>Thank you for your order</h1>
    <p class="pm">Hi '.$u[0]['name'].', Your order has been received and is now being processed. We will try to deliver very fast. It may take a maximum of 30 minute to 6 hours. Your order details are shown below for your reference:</p>
      <h3>Order details</h3></center>
    <center><h4 style="padding:10px;"><p>Order Number : '.$c[0]['ordno'].'</p>

    <p>status : '.$c[0]['status'].'</p>

     <p>Payment status : '.$c[0]['paymentstatus'].'</p>


    <p>Total Amount : '.mytotal($c[0]['token']).'</p></h4>
    
    <table style="color:#747474;border:0;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;border-top-width:1px;border-top-style:dashed;width:100%;padding-left:0;padding-right:0;text-align:right"
		width="100%" cellspacing="0" cellpadding="6" border="0"><thead><tr><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Quantity</th><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Price</th><th style="color:#747474;font-weight:bold;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;padding-left:0;text-align:left"
    align="left">Price</th></tr></thead><tbody>';
        foreach ($c as $d) {
            $bd .= '<tr><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="left">'.$d['product'].'</td><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="center">1</td><td style="color:#747474;border:0;padding:12px;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-color:#e5e5e5;padding-top:12px;padding-bottom:12px;border-bottom-width:1px;border-bottom-style:dashed;vertical-align:middle;word-wrap:break-word;padding-left:0;text-align:left"
      align="right">'.$d['price'].'</td></tr>';
        }
        $bd .= '</tbody></table>';
        $bd .= '<h3>Billing Address</h3>';
        $bd .= '<p>'.$u[0]['name'].'</p>';
        $bd .= '<p>'.$c[0]['email'].'</p>';
        $bd .= '<p>'.$c[0]['contact'].'</p>';
        $bd .= '<p>Thank you for shopping with us</p>';
        $bd .= '<p>Regards</p>';
        $bd .= '<p>Team Streetcode</p>';
        $bd .= '<p>www.streetkode.tk</p></center></body></html>';

        $subject = 'Order Received';
        $to = $c[0]['email'];

        sms('Street Code', $c[0]['contact'], 'Your order # '.orderno().' is being processed. ');
        sendmail('phpyolk.com', $subject, $bd, 'Street Code', [$to], 'support@streetkode.tk', 'support@streetkode.tk');
        echo 'statussuccess';
    } else {
        echo 'statusfailed';
    }
}

function payreject($token)
{
    if (update('vorders', ['paymentstatus' => 'cancelled'], ['token' => $token]) == 'success') {
        echo 'statussuccess';
    } else {
        echo 'statusfailed';
    }
}

function adminproducts()
{
    $finito = '';
    $c = fetchall('vproducts');
    foreach ($c as $d) {
        $cat = customfetch('vcategory', [['id', '=', $d['category']]]);
        $cat = $cat[0]['catname'];
        $finito .= '<tr>
    <td>'.$d['name'].'</td>
    <td>'.$d['price'].'</td>
    <td>'.$cat.'</td>
    <td><img src="yolkassets/upload/'.$d['image'].'" style="width:50px;height:50px;"></td>
    <td>'.$d['dateadded'].'</td>
    <td><button class="btn btn-danger btn-sm deletep" id="'.$d['id'].'"><i class="fas fa-trash"></i></button> <a class="btn btn-primary btn-sm" href="editproduct?id='.$d['id'].'"><i class="fas fa-edit"></i></a></td>
  </tr>';
    }

    echo $finito;
}

function category()
{
    $finito = '';
    $c = fetchall('vcategory');
    foreach ($c as $d) {
        $finito .= '<tr>
    <td>'.$d['id'].'</td>
    <td>'.$d['catname'].'</td>
    <td><button class="btn btn-danger btn-sm deletec" id="'.$d['id'].'"><i class="fas fa-trash"></i></button> <a class="btn btn-primary btn-sm" href="editcategory?id='.$d['id'].'"><i class="fas fa-edit"></i></a></td>
  </tr>';
    }

    echo $finito;
}

function customstate()
{
    $finito = '';
    $c = fetchall('custom');
    foreach ($c as $d) {
        $finito .= '<tr>
    
    <td>'.$d['state'].'</td>
    <td><button class="btn btn-danger btn-sm deletest" id="'.$d['id'].'"><i class="fas fa-trash"></i></button> <a class="btn btn-primary btn-sm" href="dels?id='.$d['id'].'"><i class="fas fa-edit"></i></a></td>
  </tr>';
    }

    echo $finito;
}

function listcategory()
{
    $finito = '';
    $c = fetchall('vcategory');
    foreach ($c as $d) {
        $finito .= '<option value="'.$d['id'].'">'.$d['catname'].'</option>';
    }

    echo $finito;
}

// add product ++++++++++++++
function addproduct($name, $price, $category)
{
    if (empty($name) || empty($price) || empty($category)) {
        echo 'All fields are required';
    } else {
        if (insert('vproducts', ['name' => $name, 'price' => $price, 'category' => $category, 'status' => 'available', 'dateadded' => date('jS F, Y')], $_FILES, '../yolkassets/upload/') == 'success') {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}

function adminusers()
{
    $finito = '';
    $c = fetchall('vusers');

    foreach ($c as $d) {
        $status = $d['status'];
        switch ($status) {
      case 'active':
        $md = '<span class="badge badge-success">'.$d['status'].'</span>';
        break;
      case 'inactive':
        $md = '<span class="badge badge-danger">'.$d['status'].'</span>';
        break;
    }
        $finito .= '<tr>
    <td>'.$d['name'].'</td>
    <td>'.$d['email'].'</td>
    <td>'.$d['contact'].'</td>
    <td>'.$d['datejoined'].'</td>
    <td>'.$md.'</td>
    <td><button class="btn btn-danger btn-sm deleteu" id="'.$d['id'].'"><i class="fas fa-trash"></i></button> <a class="btn btn-primary btn-sm" href="delu?id='.$d['id'].'"><i class="fas fa-edit"></i></a></td>
  </tr>';
    }

    echo $finito;
}

function app($data)
{
    $c = fetchall('settings');
    $c = $c[0];
    echo $c[$data];
}

function editapp($appname, $appemail, $appcontact, $appaddress, $about)
{
    if (empty($appname) || empty($appemail) || empty($appcontact) || empty($appaddress) || empty($about)) {
        echo 'All fields are required';
    } else {
        if (update('settings', ['appname' => $appname, 'appemail' => $appemail, 'appcontact' => $appcontact, 'appaddress' => $appaddress, 'about' => $about]) == 'success') {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}

function addcustom($state)
{
    if (empty($state)) {
        echo 'All fields are required';
    } else {
        if (insert('custom', ['state' => $state]) == 'success') {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}

function deletestate($id)
{
    if (delete('custom', [['id', '=', $id]]) == 'success') {
        echo 'deletesuccess';
    } else {
        echo 'deletefailed';
    }
}

function deleteproduct($id)
{
    if (delete('vproducts', [['id', '=', $id]]) == 'success') {
        echo 'deletesuccess';
    } else {
        echo 'deletefailed';
    }
}

function addcategory($catname)
{
    if (empty($catname)) {
        echo 'All fields are required';
    } else {
        if (insert('vcategory', ['catname' => $catname]) == 'success') {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}

function deletecategory($id)
{
    if (delete('vcategory', [['id', '=', $id]]) == 'success') {
        echo 'deletesuccess';
    } else {
        echo 'deletefailed';
    }
}

function deleteuser($id)
{
    if (delete('vusers', [['id', '=', $id]]) == 'success') {
        echo 'deletesuccess';
    } else {
        echo 'deletefailed';
    }
}

function app1($data)
{
    $c = fetchall('settings');
    $c = $c[0];

    return $c[$data];
}

function item($table, $id, $data)
{
    $c = customfetch($table, [['id', '=', $id]]);
    $c = $c[0];

    return $c[$data];
}

function editproduct($id, $name, $price, $category)
{
    if (empty($name) || empty($price) || empty($category)) {
        echo 'All fields are required';
    } else {
        if (update('vproducts', ['name' => $name, 'price' => $price, 'category' => $category], ['id' => $id], $_FILES, '../yolkassets/upload/') == 'success') {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}

function editcategory($id, $catname)
{
    if (empty($catname)) {
        echo 'All fields are required';
    } else {
        if (update('vcategory', ['catname' => $catname], ['id' => $id]) == 'success') {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}
