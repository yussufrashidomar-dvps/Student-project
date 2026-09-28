<?php
include "connection.php";

$id =$_GET['ID'];
$sql = "delete from managment where ID='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('data deleted successflly '); window.location.href='adminviewstudent.php'; </script>";
}else{
    die(mysqli_error($conn));
}

?>