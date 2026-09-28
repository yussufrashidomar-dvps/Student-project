<?php 
session_start();
include "connection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT*FROM admins WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        die("Query Error:".mysqli_error($conn));
    }
    if(mysqli_num_rows($result)>=1){
        $data = mysqli_fetch_assoc($result);
        $_SESSION['username']=$data['username'];
        $_SESSION['password']=$data['password'];
        
        echo "<script>alert('WELCOME TO OUR SITE'); window.location.href='admindashbord.html';</script>";

    }else{
        echo"<script>alert('Invalid information'); </script>";
    }
}
?>

<!DOCTYPE html>
<htm>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>login</title>
       <link rel="stylesheet"  href="login.css">
    </head>
    <body>
        <div class="login">
        <form method="post">
            <h1>LOGIN FOR CONTINUE</h1>

            <label>username</label>
            <input type="text" name="username" required>

            <label>password</label>
            <input type="password" name="password" required>

            <input type ="submit" name="button">
            
        </form>
        </div>

    </body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
    <footer>
    <p>©Student managment system 2026.All write reserved!!!</p>
    </footer>
</html>
