<?php
include_once("../config/cnx_db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Firstname = $_POST['f_name'];
    $Lastname = $_POST['l_name'];
    $email = $_POST['email'];
    $password = md5($_POST['passwd']);

    $sql = "INSERT INTO users (Firs_Name, Last_Name, email, password) 
            VALUES ('$Firstname', '$Lastname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User has been created successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        form {
            margin: 20px auto;
            width: 300px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: 1px solid;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .center {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Create User</h2>
    <form method="POST" action="">
        <label for="f_name">First Name:</label>
        <input type="text" name="f_name" id="f_name" required>

        <label for="l_name">Last Name:</label>
        <input type="text" name="l_name" id="l_name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="passwd">Password:</label>
        <input type="password" name="passwd" id="passwd" required>

        <input type="submit" value="Create">
    </form>
    <div class="center">
        <a href="http://127.0.0.1/Market/back/users/" class="btn">Volver</a>
</div>

</body>
</html>
