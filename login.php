<?php
require_once 'config.php';
require_once 'classes/User.php';

$usernameOrEmail = '';
$password = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usernameOrEmail = $_POST['usernameOrEmail'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User('', '', $password, $pdo); 

    if ($user->validateLogin($usernameOrEmail, $password)) {
        $userData = $user->getUserByUsernameOrEmail($usernameOrEmail);

        if ($userData && $user->authenticate($usernameOrEmail, $password)) {
            session_start();
            $_SESSION['user_id'] = $userData['id']; 
            $_SESSION['username'] = $userData['username']; 
            $_SESSION['email'] = $userData['email']; 

            header('Location: dashboard.php');
            exit;
        } else {
            $errors['login'] = 'Invalid username/email or password.';
        }
    } else {
        $errors = $user->getErrors();
    }
}

$smarty->assign('usernameOrEmail', $usernameOrEmail);
$smarty->assign('errors', $errors);

$smarty->display('login.tpl');
