<?php

session_start();
$con = new mysqli("localhost","root","password","db_name") or die("unable to Connect".$con->connect_error);

$query="select * from admin where username like '".$_POST['username']."' and password like '".$_POST['password']."'";
$result=$con->query($query);
$r = $result->fetch_assoc();
$uname=$r['username'];
$password=$r['password'];
echo $uname."<br>".$password."<br>";
if($_POST['username']==$uname && $_POST['password']==$password){
       echo "<script>window.location.href='chat.html'</script>";
        $_SESSION['user']=$r['username'];
        setcookie("user",$_SESSION['user'],time()+360*60*60,"/");
}
else
    echo "Invaid Username or Password<script>alert(\"Invalid Username and Password\")</script>";
?>