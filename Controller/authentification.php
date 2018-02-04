<?php
include("../config/db_server.php");

$db = new DB();

$result = $db->query("SELECT * FROM `user` INNER join pageuser on user.ID = pageuser.IDP");
$row = $result->fetch_assoc();

$arr = json_encode($row);
echo $arr;
?>