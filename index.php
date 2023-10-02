<?php

include_once("./controllers/config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html lang="en">
<head>
   <title>Layar Utama</title>
</head>
<body>
    <a href="./model/add.php"> Tambah user baru</a><br><br>
    <table width='80%' border=1>
        <tr>
            <th>Name</th> <th>No Telefon</th> <th>Email</th> <th>Update</th>
        </tr>
        <?php
            while($user_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['mobile']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td><a href='./model/edit.php?id=$user_data[id]'>Edit</a> | 
                      <a href='./model/delete.php?id=$user_data[id]'>Delete</a></td>
                      </tr>";
            }
            ?>
    </table>
</body>
</html>