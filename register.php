<?php
require_once 'config.php';
require_once 'classes/User.php';

$username = '';
$email = '';
$password = '';
$errors = [];
$success = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password, $pdo);

    if ($user->validate()) {
        if ($user->usernameExists()) {
            $errors['username'] = 'Username already exists.';
        } elseif ($user->emailExists()) {
            $errors['email'] = 'Email already exists.';
        } else {
            if ($user->save()) {
                $success = ['username' => $username];
                $username = '';
                $email = '';
                $password = '';
            } else {
                $errors['general'] = 'There was an error saving your data. Please try again.';
            }
        }
    } else {
        $errors = $user->getErrors();
    }
}

$smarty->assign('username', $username);
$smarty->assign('email', $email);
$smarty->assign('errors', $errors);
$smarty->assign('success', $success);

$smarty->display('register.tpl');
