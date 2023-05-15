<?php
//login-Sign in
include("../config/cnx_db.php");
$email = $_POST["email"];
$password = md5($_POST["passwd"]);
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Usuario encontrado exitosamente. Realiza las acciones necesarias aquí.
    header("Location: http://127.0.0.1/Market/Front/Login.html");
    exit();
} else {
    echo "<script>alert('User doesn't exist')</script>";
    header("refresh:0;url=http://127.0.0.1/Market/Front/Login.html");
    exit();
}
?>
