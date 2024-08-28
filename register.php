<?php
require_once 'config.php';
require_once 'classes/User.php';

header('Content-Type: application/json');

$response = [];
$errors = [];
$success = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $user = new User($username, $email, $password, $pdo);

    if ($user->validateRegistration()) {
        if ($user->usernameExists()) {
            $errors['username'] = 'Username already exists.';
        } elseif ($user->emailExists()) {
            $errors['email'] = 'Email already exists.';
        } else {
            if ($user->save()) {
                $success = ['username' => $username];
                $response['success'] = $success;
            } else {
                $errors['general'] = 'There was an error saving your data. Please try again.';
            }
        }
    } else {
        $errors = $user->getErrors();
    }

    if (!empty($errors)) {
        $response['errors'] = $errors;
        http_response_code(400); 
    }

    echo json_encode($response);
    exit;
}
