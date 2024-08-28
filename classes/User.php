<?php

class User {
    private $pdo;
    private $username;
    private $email;
    private $password;
    private $passwordHash;
    private $errors = [];

    public function __construct($username, $email = '', $password = '', $pdo) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $this->pdo = $pdo;
    }

    public function validateRegistration() {
        if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $this->username)) {
            $this->errors['username'] = 'Username must be alphanumeric and between 3-20 characters.';
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Please enter a valid email address.';
        }

        if (!$this->validatePassword($this->password)) {
            $this->errors['password'] = 'Password should be at least 8 characters long and contain a mix of letters, numbers, and special characters.';
        }

        return empty($this->errors);
    }

    private function validatePassword($password) {
        return strlen($password) >= 8 &&
               preg_match('/[A-Za-z]/', $password) &&
               preg_match('/[0-9]/', $password) &&
               preg_match('/[\W]/', $password); 
    }

    public function validateLogin($usernameOrEmail, $password) {
        if (empty($usernameOrEmail)) {
            $this->errors['username'] = 'Username or email is required.';
        }

        if (empty($password)) {
            $this->errors['password'] = 'Password is required.';
        }

        return empty($this->errors);
    }

    public function getUserByUsernameOrEmail($usernameOrEmail) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE username = :usernameOrEmail OR email = :usernameOrEmail');
        $stmt->execute(['usernameOrEmail' => $usernameOrEmail]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function usernameExists() {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
        $stmt->execute(['username' => $this->username]);
        return $stmt->fetchColumn() > 0;
    }

    public function emailExists() {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->execute(['email' => $this->email]);
        return $stmt->fetchColumn() > 0;
    }

    public function save() {
        $stmt = $this->pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        return $stmt->execute([
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->passwordHash,
        ]);
    }

    public function authenticate($usernameOrEmail, $password) {
        $user = $this->getUserByUsernameOrEmail($usernameOrEmail);
        if ($user) {
            return password_verify($password, $user['password']);
        }
        return false;
    }

    public function getErrors() {
        return $this->errors;
    }
}
