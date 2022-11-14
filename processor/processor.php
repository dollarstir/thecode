<?php

require '../loader/autoloader.php';
require '../fragement/core.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            echo 'success';

            break;

        default:

        break;
    }
}
