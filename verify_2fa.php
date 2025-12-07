<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require 'vendor/autoload.php';
require 'db_connect.php';

use PragmaRX\Google2FA\Google2FA;

if (!isset($_SESSION['pending_user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['pending_user_id'];
$stmt = $pdo->prepare("SELECT google2fa_secret FROM int_users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$google2fa = new Google2FA();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $valid = $google2fa->verifyKey($user['google2fa_secret'], $code);

    if ($valid) {
        $_SESSION['user_id'] = $user_id;
        $username = $row["username"];
        $role = $row["role"];
        unset($_SESSION['pending_user_id']);
        header('Location: index.php');
        exit;
    } else {
        $error = "Invalid authentication code.";
    }
}
?>
<body class="a2z-wrapper" cz-shortcut-listen="true" style="background-color:#9dc7f1;">
<h1 style="text-align:center;">HRM Google Authentication</h1>
<form method="POST" style="width:30%;text-align:center;align-items:center;margin-left:auto;margin-right:auto;" >
    <label>Enter your 2FA code:</label>
    <input type="text" name="code" required>
    <button type="submit">Verify</button>
</form>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>