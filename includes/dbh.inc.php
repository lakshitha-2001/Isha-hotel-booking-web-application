<?php
$serverName ="localhost";
$dbUsername ="pathiraja123";
$dbPassword ="WabGwSXgv5s7EBH4";
$dbName ="my_login";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn)
{
    die("Connection failed : " .mysqli_connect_error());
}
//this if function use for debugging(checking for database connection)