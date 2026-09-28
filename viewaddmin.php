<?php 
include "connection.php";

$sql = "select*from admins";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>veiw admin</title>
        <style>
            a{
                text-decoration: none;
                color: blue;
                font-size: 20px;
            }
            a:hover{
                text-decoration: underline;
                color: red;
            }
        </style>

    </head>
    <body>
        <h1>Veiw admins informations</h1>
        <table border="1" cellpadding="10px" cellspacing="0px" >
            <tr>
            <th>ID</th>
            <th>full_name</th>
            <th>telephone_no</th>
            <th>username</th>
            <th>password</th>
            <th>change</th>
            <th>remove</th>
            </tr>

            <?php 
            while($data = $result->fetch_assoc()){
                echo"<tr>
                    <td>".$data['ID']."</td>
                     <td>".$data['full_name']."</td>
                       <td>".$data['telephone_no']."</td>
                        <td>".$data['username']."</td>
                         <td>".$data['password']."</td>
                         <td>
                         <a href='adminupdate.php?ID=".$data['ID']."'>Update</a>
                          </td>
                          <td>
                           <a href='deletadmin.php?ID=".$data['ID']."'>Delete</a>
                          </td>
                    </tr>
                ";
            }
            ?>

        </table>

    </body>
</html>