<?php
$conn = new mysqli('localhost','root','','student');

if($conn){
  //  echo "connected";
}else{
    die(mysqli_error($conn));
}
?>