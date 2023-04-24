<?php
//login-Sign in
include("../config/cnx_db.php");
$email =$_POST["email"];
$passw =$_POST["password"];
$sql ="SELECT * FROM users WHERE email ='$email' AND password ='passwd'";