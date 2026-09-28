<?php 
include "connection.php";

if(isset($_POST['update'])){
    $id = $_POST['ID'];
    $name = $_POST['full_name'];
    $course = $_POST['course'];
    $phone = $_POST['telephone_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "UPDATE managment SET full_name='$name',course='$course',telephone_no='$phone',username='$username',
    password='$password' WHERE ID ='$id' ";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('data updated succsesifulyy!!'); window.location.href='adminviewstudent.php';</script>";
    }else{
        die(mysqli_error($conn));
    }
}
    $id = $_GET['ID'];
    $sql = "select * from managment Where ID='$id'";
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
        <h1>Update student information</h1>

        <input type="hidden" name="ID" value="<?php echo $data['ID'] ?>">

        <label>full_name</label>
        <input type="text" name="full_name" value="<?php echo $data['full_name']?>"><br>

        <label>course</label>
        <select name="course">
        <option value="software enginering"<?php if($data['course']=='software enginering') echo 'selected';?>>software enginering</option>
        <option value="computer science"<?php if($data['course']=='computer science') echo 'selected';?>>computer science</option>
        <option value="Information Technology"<?php if($data['course']=='Information Technology') echo 'selected';?>>Information Technology</option>
        <option value="cybersecurity"<?php if($data['course']=='cybersecurity') echo 'selected';?>>cybersecurity</option>
        <option value="Business information system"<?php if($data['course']=='Business information system') echo 'selected';?>>
            Business information system</option>
        </select><br>

        <label>telephone_no</label>
        <input type="tel" name="telephone_no" value="<?php echo $data['telephone_no']?>"><br>

        <label>username</label>
        <input type="text" name="username" value="<?php echo $data['username']?>"><br>

        <label>password</label>
        <input type="password" name="password" value="<?php echo $data['password']?>"><br>

        <input type="submit" name="update" value="UPDATE"><br>
        </form>
    </body>

</html>