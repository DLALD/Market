<?php
//login-Sign in
include("../config/cnx_db.php");
$email =$_POST["email"];
$passw =md5($_POST["password"]);
$sql ="SELECT * FROM users WHERE email ='$email' AND password ='passwd'";
$result =$conn->query($sql);
if($result->num_rows > 0){
    echo"User has been found successfully.you're login";
}else{
    echo"Verify your date ";
}
?>