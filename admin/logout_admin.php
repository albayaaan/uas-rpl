<?php
session_start();
unset($_SESSION["login"]);
session_destroy();
header("Location: page_login_admin.php");
