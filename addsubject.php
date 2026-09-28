<?php 
include "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject_code = $_POST['subject_code'];
    $subject_name = $_POST['subject_name'];
    $description = $_POST['description'];

    $check = mysqli_query($conn, "SELECT*FROM subjects WHERE
    subject_code = '$subject_code'");

    if(mysqli_num_rows($check) >0){
       echo "<script>alert('subject_code already exists. please choose another.');
        window.location.href='addsubject.php';</script>";
       exit();
    }

    $sql = "insert into subjects(subject_code, subject_name, description) values
    ('$subject_code','$subject_name','$description')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Subject added successfully');
         window.location.href='addsubject.php';</script>";
    }else{
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>register</title>
        <link rel="stylesheet" href="form.css">
    </head>
    
    <body>
    <div class="container">
    <form method="post">
        <h1>Add subject</h1>

        <p>Enter subject information</p>

        <label>subject code</label>
        <input type="text" name="subject_code" required>

        <label>subject name</label>
        <input type="text" name="subject_name"required>

        <label>description</label>
        <textarea name="description" rows="7" required></textarea>

        <button type="submit" class="batan" >Send</button>
    </form>
    </div>
    </body>
    <footer>
        <p>© 2026 Student Managment system. All write reserved.</p>
    </footer>
</html>