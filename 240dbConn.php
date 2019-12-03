<?php
$dbServer = 'localhost';
$dbUserName = 'iste240t02';
$password = "nosesorry";
$db = "iste240t02";

//Getting connection
$conn = new mysqli($dbServer,$dbUserName,$password,$db);

//Error checking
if(mysqli_connect_errno()){
    //If prod dont pushh error msg.
    echo "Issue with DB connection ".mysql_connect_error();
    die();
}
?>