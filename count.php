<?php
$con = new mysqli("localhost", "root", "password",'db_name');

 #creating  a new table for Admins 
 $admin = "create table admin(username varchar(20),password varchar(15))";
 $con->query($admin);
 #creating a new table for Messages
 $msg = "create table messages(userid varchar(20),message varchar(1000))";
 $con->query($msg);
 #inserting value to admin
 $adminins="insert into admin values('User1','Password')";
 $con->query($adminins);
 $adminins="insert into admin values('User2','Password')";
 $con->query($adminins);
 
?>