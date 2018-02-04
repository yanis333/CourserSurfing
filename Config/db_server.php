<?php


class DB{


    private $db;

    public function __construct()
    {
        $servername = "localhost";
        $username = "tutor";
        $password = "tutor123";
        $database = "tutorsurfing";
        $this->db = mysqli_connect($servername,$username,$password,$database);

    }

    public function query($txt){
       return $this->db->query($txt);
    }

    public function close(){
        $this->db->close();
    }



}
/*
$db = new DB();
$result = $db->query("select * from login");
while ($row = $result->fetch_assoc()) {
echo "Username: ".$row['username']."<br> Password: ".$row['password']."<br>  Email: ".$row['email'];

}
echo "<br><br>Query directly from the database->PhpMyadmin";
$db->close();*/
?>