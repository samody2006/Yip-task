<?php
require_once 'config.php';

session_start(); 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

$title = $page === 'home' ? 'Yiponline - Home' :
         ($page === 'dashboard' ? 'Yiponline - Dashboard' :
         'Yiponline - ' . ucfirst($page));

$smarty->assign('title', $title);

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

switch ($page) {
    case 'register':
        $content = $smarty->fetch('register.tpl');
        break;

    case 'login':
        $content = $smarty->fetch('login.tpl');
        break;

    case 'dashboard':
        $smarty->assign('username', $username);
        $content = $smarty->fetch('dashboard.tpl');
        break;

    default:
        $content = '<h1>Welcome to Yiponline!</h1><p>Please register or login to gain access to our features.</p>';
        break;
}

$smarty->assign('content', $content);
$smarty->display('index.tpl');
