<?php
include("../config/db_server.php");
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-03
 * Time: 11:27 PM
 */

$db = new DB();

$result = $db->query("select * from course inner JOIN user on user.ID = course.IDRef");
$arr = array();
while ($row = $result->fetch_assoc()) {
    $arr[] =$row;
}
$db->close();
echo json_encode($arr);
?>