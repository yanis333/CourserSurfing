<?php
include("../config/db_server.php");

$db = new DB();
$result = $db->query("SELECT * FROM `course` inner join idtitle on idtitle.IDT=course.IDC");
$row = $result->fetch_assoc();
$db->close();
echo json_encode($row);
?>