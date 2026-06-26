<?php
/*
 |--------------------------------------------------------------------------
 | Database connection settings
 |--------------------------------------------------------------------------
 |
 | LOCAL (XAMPP) values are filled in below and work out of the box.
 |
 | To put the site ONLINE on a free host (e.g. InfinityFree), just replace
 | the four values with the database details your host gives you, then save.
 | Nothing else in the project needs to change.
 |
 */

$DB_HOST = 'localhost';    // ONLINE: e.g.  sqlXXX.infinityfree.com
$DB_USER = 'root';         // ONLINE: e.g.  if0_XXXXXXXX
$DB_PASS = '';             // ONLINE: your database password
$DB_NAME = 'profamily';    // ONLINE: e.g.  if0_XXXXXXXX_profamily

$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con, 'utf8');
mysqli_query($con, "set character_set_server='utf8'");
mysqli_query($con, "set names 'utf8'");
?>
