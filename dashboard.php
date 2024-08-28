<?php
require_once 'config.php';


session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$smarty->assign('username', $_SESSION['username']);

$smarty->display('dashboard.tpl');
