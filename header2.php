<?php

// Start session
session_start();

include_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
</head>
<style>
    /* Add a black background color to the top navigation */
.topnav {
    background-color: whitesmoke;
    width: 120%;
    overflow: hidden;
    margin: auto;
    margin-top: 0;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: whitesmoke;
  text-align: center;
  padding: 5px 10px;
  text-decoration: none;
  font-size: 15px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #cecaf1;
  color: #aaa5af;
}

/* Add a color to the active/current link */
.topnav a.active {
  color: white;
}

.topnavlinks {
    margin-top:21px;
    padding: 0 3px;
}

.topnavlinks a {
    color: whitesmoke;
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
  padding: 0 10px;
}

a {
    border-radius: 15px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  float: right;
  position: relative;
  /* display: inline-block; */
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #cec6c6;
  min-width: 105px;
  text-align: left;
  padding-inline-start: 5px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 3px;
  width: 250px;
  text-align: left;
  text-decoration: none;
  font-size: 13px;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #f6e18e;
  color: #000;
}

ul li {
    list-style-type: none;
}

#timer {
  margin: auto;
  padding-left: 5px;
  width: 200px;
  color: #fff;
  background-color: #c90c26;
  font-size: 1.2em;
  text-align: center;
  border: 1px solid #333;
}


</style>
<body class="a2z-wrapper" cz-shortcut-listen="true" style="margin-left:auto;margin-right:auto;width:100%;">
<div class="topnav" style="width:111%;margin-left:-29px;margin-right:14px;margin-bottom:5px;height:130px;margin-top:-10px;background-color:#fff;">
        <a class="true_home active" style="margin-right:5px;" href="index.php"><img src="assets/image/hospital.png" height="130" width="175" /></a>
    <div class="topnavlinks">
        
        
          <div style="font-size:1.8em;margin-left:45%;"><span id="timer">4h 0m 0s</span></div>

        <div class="topnav-right" style="margin-top:-30px;">
        
            <?php if(isset($_SESSION["user_id"])) { ?>
	      <?php if($_SESSION["role"]=='admin') { ?>
            <?php } else { } ?>
            <a style="background-color:#212faf;border:0;margin-right:5px;" href="logout.php" class="btn btn-danger ml-3">Log out</a>
            <a  target="_blank" rel="noopener noreferrer" style="background-color:#212faf;border:0;margin-right:5px;" href="users/profile.php" class="btn btn-danger ml-3"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            <div class="dropdown">
                     
        <?php   
        } else { ?>
       <?php if(!isset($_SESSION["user_id"])) { ?>
        <a class="btn btn-danger ml-3" href="login.php">Log In</a>
        <?php
        }
    }

      ?>
            
        </div>
    </div>
</div>
<script src="./timer.js"></script>
</body>
</html>
