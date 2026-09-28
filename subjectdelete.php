<?php
include "connection.php";

$id =$_GET['subject_code'];
$sql = "delete from subjects where subject_code='$id'";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('data deleted successflly!! '); window.location.href='viewsubject.php'; </script>";
}else{
    die(mysqli_error($conn));
}

?>