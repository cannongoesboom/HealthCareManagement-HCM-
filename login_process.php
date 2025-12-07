<?php
session_start();
require 'vendor/autoload.php';
require 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM int_users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    if (empty($user['google2fa_secret'])) {
        // No 2FA secret yet – go to setup
        $_SESSION['user_id'] = $user['id'];
        header('Location: setup_2fa.php');
        exit;
    } else {
        // 2FA enabled – proceed to verification
            $_SESSION['pending_user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

        header('Location: verify_2fa.php');
        exit;
    }
} else {
    echo "Invalid username or password.";
}
