<?php 
include "connection.php";

$sql = "select*from subjects";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>veiw admin</title>
        <style>

            .maelezo{
                
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
        <h1>Veiw subject informations</h1>
        <table border="1" cellpadding="10px" cellspacing="0px" >
            <tr>
            
            <th>subject_code</th>
            <th>subject_name</th>
            <th class="maelezo">description</th>
            <th>change</th>
            <th>remove</th>
            </tr>

            <?php 
            while($data = $result->fetch_assoc()){
                echo"<tr>
                    <td>".$data['subject_code']."</td>
                     <td>".$data['subject_name']."</td>
                       <td>".$data['description']."</td>
                       <td>
                         <a href='subjectupdate.php?subject_code=".$data['subject_code']."'>Update</a>
                          </td>
                          <td>
                           <a href='subjectdelete.php?subject_code=".$data['subject_code']."'>Delete</a>
                          </td>
                    </tr>
                ";
            }
            ?>

        </table>

    </body>
</html>
