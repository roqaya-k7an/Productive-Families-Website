<?php
/*
 |--------------------------------------------------------------------------
 | Database connection
 |--------------------------------------------------------------------------
 |
 | Works in three places automatically:
 |   • Local XAMPP        -> uses localhost / root / profamily (defaults below)
 |   • Railway (online)   -> automatically reads Railway's MySQL variables
 |   • Any other host     -> set DB_HOST / DB_USER / DB_PASS / DB_NAME env vars
 |
 | You normally do NOT need to edit this file.
 |
 */

// This project was written for PHP 7.4. Keep the old (non-throwing) mysqli
// behaviour so it runs the same way on modern PHP 8 servers.
mysqli_report(MYSQLI_REPORT_OFF);

$DB_HOST = getenv('MYSQLHOST')     ?: getenv('DB_HOST') ?: 'localhost';
$DB_USER = getenv('MYSQLUSER')     ?: getenv('DB_USER') ?: 'root';
$DB_PASS = getenv('MYSQLPASSWORD') ?: getenv('DB_PASS') ?: '';
$DB_NAME = getenv('MYSQLDATABASE') ?: getenv('DB_NAME') ?: 'profamily';
$DB_PORT = (int)(getenv('MYSQLPORT') ?: getenv('DB_PORT') ?: 3306);

$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($con, 'utf8');
mysqli_query($con, "set character_set_server='utf8'");
mysqli_query($con, "set names 'utf8'");
?>
