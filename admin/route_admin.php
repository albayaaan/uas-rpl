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
    case 'page_add_webinar':
        include('page_add_webinar.php');
        break;
    case 'page_add_konseling':
        include('page_add_konseling.php');
        break;
    case 'page_edit_webinar':
        include('page_edit_webinar.php');
        break;
    case 'page_edit_konseling':
        include('page_edit_konseling.php');
        break;
    case 'page_edit_user':
        include('page_edit_user.php');
        break;

    default:
        # code...
        break;
}
