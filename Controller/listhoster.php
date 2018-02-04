<?php
include("../config/db_server.php");
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-04
 * Time: 5:28 AM
 */
$yanis=3;
$db = new DB();
$db->query("Delete from idhosters");
$db->close();
$db= new DB();

$db->query("insert into idhosters(IDH) VALUES ('".$_POST['value']."')");
$db->close();
?>