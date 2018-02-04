<?php
include("../config/db_server.php");
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-03
 * Time: 11:27 PM
 */
$yanis=3;
$db = new DB();
$db->query("Delete * from idtitle");
$db->query("insert into idtitle(IDT) VALUES ('".$_POST['value']."')");
$db->close();
?>