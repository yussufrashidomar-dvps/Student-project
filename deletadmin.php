<?php
include "connection.php";

$id =$_GET['ID'];
$sql = "delete from admins where ID='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('data deleted successflly '); window.location.href='viewaddmin.php'; </script>";
}else{
    die(mysqli_error($conn));
}

?>