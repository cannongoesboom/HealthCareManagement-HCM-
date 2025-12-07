<?php
// $servername = "hp-db01-dev.cnv6bsgjgfnl.us-east-2.rds.amazonaws.com";
// $username = "hpdbdevadmin";
// $password = "kESd3e7tqpYrp5";

$servername = "localhost";
$username = "root";
$password = "LUzvimindaT1!";

try {
  $db_con = new PDO("mysql:host=$servername;dbname=reg_crm", $username, $password);
  // set the PDO error mode to exception
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>