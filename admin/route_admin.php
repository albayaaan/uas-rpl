<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {
    case 'dashboard':
        include('dashboard.php');
        break;
    case 'user_table':
        include('user_table.php');
        break;
    case 'webinar_table':
        include('webinar_table.php');
        break;
    case 'konseling_table':
        include('konseling_table.php');
        break;

    default:
        # code...
        break;
}
