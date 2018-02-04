<?php
include ("../config/db_server.php");
/**
 * Created by PhpStorm.
 * User: ahmed
 * Date: 2018-02-04
 * Time: 6:15 AM
 */
$email = $_POST['emailA'];
$pass = $_POST['pass'];
$db = new DB();
$rg = "Select * from user where email='".$email."' AND password= '".$pass."'";
$result = $db->query("Select * from user where email='".$email."' AND password= '".$pass."'");
$row = $result->fetch_assoc();
if($row!=null){
    $db= new DB();
    $db->query("delete from pageuser");
    $db->query("insert into pageuser(IDP) VALUES ('".$row["ID"]."')");
    $db->close();
    echo true;
}else{
    echo false;
}


