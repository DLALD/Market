<?php
//developer ;Luis lopez
$host ="localhost"; //127.0.0.1
$port ="3306";
$username ="root";
$password ="";
$dbname ="market";
//mysql conection
$conn = new mysqli($host,$username,$password,$dbname,$port);
//check conection
if($conn->connect_error){
    die("connection failed".$conn->connection_error);
}else{
    echo "connecion succeessfully";
}
?>