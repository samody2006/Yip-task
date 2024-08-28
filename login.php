<?php

require_once 'config.php';
require_once 'classes/User.php';

session_start(); 

$username = '';
$password = '';
$errors = [];
$success = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, '', $password, $pdo);

    if ($user->validateLogin()) {
        if ($user->usernameExists()) {
            if ($user->authenticate()) {
                $_SESSION['username'] = $username;
                header('Location: index.php?page=dashboard');
                exit;
            } else {
                $errors['password'] = 'Incorrect password.';
            }
        } else {
            $errors['username'] = 'Username does not exist.';
        }
    } else {
        $errors = $user->getErrors();
    }
}

$smarty->assign('username', $username);
$smarty->assign('errors', $errors);
$smarty->assign('success', $success);

$smarty->display('login.tpl');
