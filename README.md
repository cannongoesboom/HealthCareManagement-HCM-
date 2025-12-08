This is an intake form for a hospital or office, that inserts a patient record in the patients database table.  
It was written in PHP 7.4 and MySQL.

There is Google 2FA included in this code for secondary authentication.

The hcm.sql contains the two tables needed for this project to work.  There is an int_users table for the internal users and a patients table for the patients and their information and health issues.

Also, there is a customizable timer for inactive users.  The timer.js file contains the code for that option.  If not want, simply remove the link in the header2.php file.
