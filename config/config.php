<?php
 $servername = "localhost";
 $username = "root";
 $password = "";

try {
  $db_con = new PDO("mysql:host=$servername;dbname=healthcare", $username, $password);
  // set the PDO error mode to exception
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
