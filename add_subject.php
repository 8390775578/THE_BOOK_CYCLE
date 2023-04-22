<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Subject</title>
</head>

<body>
    <a href="../frontend/index.html">Go to the Home Page</a><br><br>
    
<?php
    $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
    // if ($con) {
    //     echo "Connected succesfully";
    // }
    $subject_name = $_POST["subject_name"];
    $subject_id = $_POST["subject_id"];

    $insert_query = "INSERT INTO subjects(subject_id, subject_name) VALUES ('$subject_id', '$subject_name')" or die($insert_query);
    $department_creation = mysqli_query($con, $insert_query) or die(mysqli_error($con));

    if ($department_creation) {
         echo "New Subject added";
    }
?>
</body>
</html>