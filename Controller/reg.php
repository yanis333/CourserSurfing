<?php
include ("../config/db_server.php");

$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$yanis="insert into user (username,password,email) VALUES ('".$user."','".$pass."','".$email."')";
$db = new DB();
$db->query("insert into user (username,password,email) VALUES ('".$user."','".$pass."','".$email."')");
$result = $db->query("Select * from user where email='".$email."' AND password= '".$pass."'");
$row = $result->fetch_assoc();
$db->query("delete from pageuser");
$db->query("insert into pageuser(IDP) VALUES ('".$row["ID"]."')");
$db->close();


?>