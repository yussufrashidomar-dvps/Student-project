<?php
include "connection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['full_name'];
    $course = $_POST['course'];
    $tel_no = $_POST['telephone_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conferm = $_POST['conferm_password'];

       
         $check = mysqli_query($conn, "SELECT*FROM managment WHERE
         username = '$username'");

         if(mysqli_num_rows($check) >0){
            echo "<script>alert('username already exists. please choose another.');
             window.location.href='register.html';</script>";
            exit();
         }

   
        if($password != $conferm){
            echo "<script>alert('password do not match!');  window.location.href='register.html';</script>";
        }

        $sql = "insert into managment (full_name,course,telephone_no,username,password,conferm_password)VALUES
         ('$name','$course','$tel_no','$username','$password','$conferm')";
         $result = mysqli_query($conn,$sql);
         if($result){
            echo "<script>alert('Data inserted sucsesifully!🎊🎊');  window.location.href='register.html';</script>";
         }else{
            die(mysqli_error($conn));
         }
    }else{
        die(mysqli_error($conn));
    }


?>