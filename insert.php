<?php
session_start();

$con = new mysqli("localhost","root","password","db_name") or die("unable to Connect".$con->connect_error);

    $query="insert into messages values('".$_SESSION['user']."','".$_POST['message']."')";
$con->query($query);
?>
