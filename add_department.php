<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Department</title>
</head>

<body>
    <a href="../frontend/index.html">Go to the Home Page</a><br><br>
    
<?php
    $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
    // if ($con) {
    //     echo "Connected succesfully";
    // }
    $department_name = $_POST["department_name"];
    $department_id = $_POST["department_id"];

    $insert_query = "INSERT INTO departments(department_id, department_name) VALUES ('$department_id', '$department_name')" or die($insert_query);
    $department_creation = mysqli_query($con, $insert_query) or die(mysqli_error($con));

    if ($department_creation) {
         echo "New department added";
    }
?>
</body>
</html>