<?php
include "connection.php";



if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['full_name'];
    $tel_no = $_POST['telephone_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conferm = $_POST['conferm_password'];

        $check = mysqli_query($conn, "SELECT*FROM admins WHERE
        username = '$username'");

        if(mysqli_num_rows($check) >0){
        echo "<script>alert('username already exists. please choose another.');
            window.location.href='addadmin.html';</script>";
        exit();
        }
   
        if($password != $conferm){
            echo "<script>alert('password do not match!');  window.location.href='register.html';</script>";
        }

        $sql = "insert into admins (full_name,telephone_no,username,password,conferm_password)VALUES
         ('$name','$tel_no','$username','$password','$conferm')";
         $result = mysqli_query($conn,$sql);
         if($result){
            echo "<script>alert('Data inserted sucsesifully!🎊🎊');  window.location.href='addadmin.html';</script>";
         }else{
            die(mysqli_error($conn));
         }
    }else{
        die(mysqli_error($conn));
    }


?>