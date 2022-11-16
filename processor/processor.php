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

        default:

        break;
    }
}
