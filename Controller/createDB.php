<?php
include("../Config/db_server.php");

$title = $_POST['title'];
$subject = $_POST['subject'];
$req = $_POST['req'];
$status = $_POST['status'];
$time = $_POST['time'];
$desc = $_POST['desc'];
$id = $_POST['idcreate'];

$db = new DB();

$db->query("insert into course (title,subject,requirement,status,time,Description,IDRef) Values('".$title."','".$subject."','".$req."','".$status."','".$time."','".$desc."','".$id."')");
$db->close();


?>