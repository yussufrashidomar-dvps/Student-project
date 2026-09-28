<?php 
include "connection.php";

if(isset($_POST['update'])){
    $id = $_POST['subject_code'];
    $name = $_POST['subject_name'];
    $phone = $_POST['descriptin'];
    

    $sql = "UPDATE subjects SET subject_code='$id',subject_name='$name' 
    WHERE subject_code ='$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('data updated succsesifulyy!!'); 
        window.location.href='viewsubject.php';</script>";
    }else{
        die(mysqli_error($conn));
    }
}
    $id = $_GET['subject_code'];
    $sql = "select * from subjects Where subject_code='$id'";
    $result = mysqli_query($conn,$sql);
    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charest="UTF-8">
        <meta name="stylesheet" content="width=device-width,initial-scale=1.0">
       <link rel="stylesheet" href="Update.css">
      
      
    </head>
    <body>
       
        <form method = "post" class="container">
        <h1>Update subject information</h1>
        <label>subject_code</label>
        <input type="text" name="subject_code" value="<?php echo $data['subject_code'] ?>">

        <label>subject_name</label>
        <input type="text" name="subject_name" value="<?php echo $data['subject_name']?>"><br>

        <label>description</label>
        <textarea row="7" type="text" name="description"><?php echo $data['description']?>

        </textarea><br>

       

        <input type="submit" name="update" value="UPDATE"><br>
        </form>
    </body>

</html>