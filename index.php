<?php

include_once("./controllers/config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html lang="en">
<head>
   <title>Layar Utama</title>
   <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body class="">
    <div class="m-9">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl text-blue-950 font-semibold">List user yang terdaftar</h1>
            <a href="./model/add.php" class="text-lg font-semibold bg-blue-900 px-3 py-2 rounded-md hover:bg-blue-600 text-white"> Tambah user baru</a>
        </div>
        <table width='100%' border=1 class="mt-4 border border-black">
            <tr class="p-4 border border-black bg-blue-900 text-white text-left">
                <th class="p-3 border border-black">Nama</th> 
                <th class="p-3 border border-black">No Telefon</th> 
                <th class="p-3 border border-black">Email</th> 
                <th class="p-3 border border-black text-center">Update</th>
            </tr>
            <?php
                while($user_data = mysqli_fetch_array($result)){
                    echo "<tr class='font-semibold'>";
                    echo "<td class=\"p-3 border border-black\">".$user_data['name']."</td>";
                    echo "<td class=\"p-3 border border-black\">".$user_data['mobile']."</td>";
                    echo "<td class=\"p-3 border border-black\">".$user_data['email']."</td>";
                    echo "<td class=\"text-center border border-black\"><a href='./model/edit.php?id=$user_data[id]' class='text-blue-900'>Edit</a> | 
                          <a href='./model/delete.php?id=$user_data[id]' class='text-red-900'>Delete</a></td>
                          </tr>";
                }
                ?>
        </table>
    </div>
</body>
</html>