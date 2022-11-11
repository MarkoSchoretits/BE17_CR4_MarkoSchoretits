<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be17_cr4_markoschoretits_biglibrary";

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
// }else {
//     echo "Connected successfully";
}