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
            checkout($name, $email, $contact, $note, $paymenttype, $password);
            break;

        case 'pay':
            extract($_POST);
            pay($transactionid, $network);
            break;

        case 'editpay':
            // code...
            extract($_POST);
            editpay($transactionid, $network);
            break;

        case 'checkpaystatus':
            checkpaymentstatus();
            break;

        case 'checkorderstatus':
            checkorderstatus();
            break;

        case 'processing':
            extract($_POST);
            processing($token);
            // code...
            break;

        case 'complete':

            extract($_POST);
            complete($token);
            // code...
            break;

        case 'payapprove':
            # code...
            extract($_POST);
            payapprove($token);
            break;

        case 'payreject':
                # code...
            extract($_POST);
            payreject($token);
            break;

        case 'reject':
                # code...
            extract($_POST);
            reject($token);
            break;

        case 'addproduct':
            extract($_POST);
            addproduct($name, $price, $category);
            # code...
            break;

        case 'editapp':
            extract($_POST);
            editapp($appname, $appemail, $appcontact,$appaddress, $about);
            # code...
            break;

        case 'addcustom':
            extract($_POST);
            addcustom($state);
            # code...
            break;

        case 'deletestate':
            extract($_POST);
            deletestate($id);
            # code...
            break;
        case 'deleteproduct':
            extract($_POST);
            deleteproduct($id);
            # code...
            break;

        case 'addcategory':
            extract($_POST);
            addcategory($catname);
            # code...
            break;

        case 'deletecategory':
            extract($_POST);
            deletecategory($id);
            # code...
            break;

        case 'deleteuser':
            extract($_POST);
            deleteuser($id);
            # code...
            break;

        default:

        break;
    }
}
