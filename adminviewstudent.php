<?php 
include "connection.php";

$sql = "select*from managment";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>veiw student</title>
        <meta charset="UTF-8">
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <style>
                        .size{
                width: 100%;
                max-width: 1200px;
                margin: auto;
                border-collapse: collapse;

            }

            @media (max-width:600px) {
                .size{
                    width: 95%;
                }
            }
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
         <div class="size">
        <h1>Manage students informations</h1>
        
        <table border="1" cellpadding="10px" cellspacing="0px" >
            <tr>
            <th>ID</th>
            <th>full_name</th>
            <th>course</th>
            <th>telephone_no</th>
            <th>username</th>
            <th>password</th>
            <th>conferm_password</th>
            <th>change</th>
            <th>remove</th>
            </tr>

            <?php 
            while($data = $result->fetch_assoc()){
                echo"<tr>
                    <td>".$data['ID']."</td>
                     <td>".$data['full_name']."</td>
                      <td>".$data['course']."</td>
                       <td>".$data['telephone_no']."</td>
                        <td>".$data['username']."</td>
                         <td>".$data['password']."</td>
                          <td>".$data['conferm_password']."</td>
                          <td>
                           <a href=' Update.php?ID=".$data['ID']."'>Update</a>
                          </td>
                          <td>
                           <a href='delete.php?ID=".$data['ID']."'>Delete</a>
                          </td>
                    </tr>
                ";
            }
            ?>

        </table>
        
    </body>
</html>