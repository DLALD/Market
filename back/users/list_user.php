<?php include_once("../config/cnx_db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <table border="1" aling ="center">
        <tr><th>Firstname</th><th>Lastname</th><th>email</th></tr>
        <?php
        $sql="SELECT*FROM users";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>".$row['Firs_Name']."</td>
                <td>".$row['Last_Name']."</td>
                <td>".$row['email']."</td>
                <td><a href='edit_user.php?id=".$row['id']."'></td></tr>
                <img src'../../front/icons/update.php'whidth='10'></a>&nbsp;
                <td><a href='delete.user.php?id=".$row['id']."'>
                <img src'../../front/icons/update.php'></a></td></tr>";
            }//while
        }else{
        echo "no data";
    }?>
    </table>    
</body>
</html>