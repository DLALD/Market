<?php
//login-Sign in
include("../config/cnx_db.php");
$email =$_POST["email"];
$passw =md5($_POST["password"]);
$sql ="SELECT * FROM users WHERE email ='$email' AND password ='passwd'";
$result =$conn->query($sql);
if($result->num_rows > 0){
    //echo"User has been found successfully.you're login";
    //echo "User has been Create Successfully";
    //header("Location:http://127.0.0.1/Market/Front/Login.html");
    //echo "<script>alert('user has been Create Successfully' )</script>";
    header("Location:http://127.0.0.1/Market/Front/Login.html");
    
   
}else{
    echo "<script>alert('user does't exist ')</script>";
    header ("refresh=0;url=http://127.0.0.1/Market/Front/Login.html");
    //echo"Verify your date ";
}
?>