<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
</head>

<body>
    <a href="index.html">Go to the Home Page</a><br><br>
    
<?php
    $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
    // if ($con) {
    //     echo "Connected succesfully";
    // }
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $prn = $_POST["prn"];
    $email = $_POST["email"];
    $date_of_birth = $_POST["date_of_birth"];
    $department = $_POST["department"];
    $mobile_no = $_POST["mobile_no"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $insert_query = "INSERT INTO students(first_name,last_name,prn,email,date_of_birth,department,mobile_no,gender,address) VALUES ('$first_name', '$last_name', '$prn','$email', '$date_of_birth', '$department', '$mobile_no', '$gender', '$address')" or die($insert_query);
    
    $student_creation = mysqli_query($con, $insert_query) or die(mysqli_error($con));

    if ($student_creation) {
        echo "\nStudent registered successfuly";
    }
?>
</body>
</html>