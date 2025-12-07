<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'vendor/autoload.php';
require 'db_connect.php';

use PragmaRX\Google2FA\Google2FA;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// 1️⃣ Make sure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// 2️⃣ Fetch user record
$stmt = $pdo->prepare("SELECT * FROM int_users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    exit('User not found.');
}

// 3️⃣ Create a Google2FA instance ✅
$google2fa = new Google2FA();
// 4️⃣ Generate a new secret if missing
if (empty($user['google2fa_secret'])) {
    $secret = $google2fa->generateSecretKey();
    $_SESSION['temp_2fa_secret'] = $secret;
} else {
    $secret = $user['google2fa_secret'];
}

// 5️⃣ Create the otpauth:// URL (used by QR)
$appName = 'HRM';
$email = $user['email'] ?? $user['username'];
$otpUrl = $google2fa->getQRCodeUrl($appName, $email, $secret);

// 6️⃣ Generate a QR Code image locally
$qrCode = QrCode::create($otpUrl)->setSize(250)->setMargin(10);
$writer = new PngWriter();
$result = $writer->write($qrCode);
$base64 = base64_encode($result->getString());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Setup Google 2FA</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 40px; }
        img { margin: 20px 0; }
        input, button { padding: 10px; font-size: 16px; margin-top: 10px; }
    </style>
    </head>
<body>

<h2>Set Up Google Authenticator</h2>
<p>Scan this QR code with your Google Authenticator app:</p>

<img src="data:image/png;base64,<?= $base64 ?>" alt="QR Code">

<p>Or enter this key manually: <strong><?= htmlspecialchars($secret) ?></strong></p>

<form method="POST" action="setup_2fa_verify.php">
    <label>Enter the 6-digit code from your app:</label><br>
    <input type="text" name="code" required>
    <br>
    <button type="submit">Verify & Enable 2FA</button>
</form>

</body>
</html>