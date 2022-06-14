<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {
    case 'home':
        include('home.php');
        break;
    case 'form_webinar':
        include('form_webinar.php');
        break;
    case 'form_konseling':
        include('form_konseling.php');
        break;
    case 'detail':
        include('detail.php');
        break;

    default:
        # code...
        break;
}
