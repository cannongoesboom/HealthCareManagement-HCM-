<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HRM Login</title>
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet" href="assets/datatables.min.css">
    <script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
</head>
<body class="a2z-wrapper" cz-shortcut-listen="true" style="background-color:#9dc7f1;">
    <div class="wrapper">
    <h2 class="form-signin-heading" style="text-align:center;font-size:4.9rem;">HRM Login</h2>
        <p style="text-align:center;padding-bottom:25px;">Please fill in your credentials to log in.</p><hr>

<form method="POST" action="login_process.php" style="width:30%;text-align:center;align-items:center;margin-left:auto;margin-right:auto;">
    <div class="form-group">
    <label>Username:</label>
    <input type="text" name="username" required>
    </div>
    <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>
</div>
</body>
</html>