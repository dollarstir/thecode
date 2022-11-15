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

        default:

        break;
    }
}
