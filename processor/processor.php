<?php

require '../loader/autoloader.php';
require '../fragement/core.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            extract($_POST);
            register($name, $email, $contact, $password, $repass);
            break;

        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'login1':
            extract($_POST);
            login1($email, $password);
            break;

        case 'updaterec':
            extract($_POST);
            updaterec($name, $email, $contact);
            // code...
            break;

        case 'logout':
            session_start();
            unset($_SESSION['vuser']);
            echo '<script>window.location.href = "home";</script>';
            // code...
            break;

        case 'resetpassword':
            extract($_POST);
            resetpassword($email);
            // code...
            break;

        case 'newpassword':
            extract($_POST);
            newpassword($password, $repass, $token);
            break;

        case 'addtocart':
            extract($_POST);
            addtocart($id);
            // code...
            break;

        case 'removefromcart':
            extract($_POST);
            removefromcart($id);
            break;

        case 'checkout':
            extract($_POST);
            checkout($name, $email, $contact, $paymenttype, $password);
            break;

        default:

        break;
    }
}
