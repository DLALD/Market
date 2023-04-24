<?php
include_once("../config/cnx_db.php");
$FirsName=$_POST['f_name'];
$LastName =$_POST['l_name'];
$email=$_POST['email'];
$pass=$_POST['passwd'];
$sql = " INSERT INTO users (Firs_Name,Last_Name,email,password) 
values('$FirsName','$LastName','$email','$pass')";
//$conn->query($sql);
if($conn->query($sql)===TRUE){
    echo "User has been Create Successfully";
}else{
    echo "Error:"-$conn->error;
}