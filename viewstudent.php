<?php 
include "connection.php";

$sql = "select*from managment";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>veiw student</title>

    </head>
    <body>
        <h1>Veiw students informations</h1>
        <table border="1" cellpadding="10px" cellspacing="0px" >
            <tr>
            <th>ID</th>
            <th>full_name</th>
            <th>course</th>
            <th>telephone_no</th>
            <th>username</th>
            <th>password</th>
            <th>conferm_password</th>
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
                    </tr>
                ";
            }
            ?>

        </table>

    </body>
</html>