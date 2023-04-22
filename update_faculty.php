<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Faculty</title>
</head>

<body>


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
    $mobile_no = $_POST["mobile_no"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $update_query = " UPDATE faculty SET first_name='$first_name', last_name='$last_name', email='$email', date_of_birth='$date_of_birth', mobile_no=$mobile_no, gender='$gender', address='$address' WHERE prn=$prn ";
    
    $updated_student = mysqli_query($con, $update_query) or die(mysqli_error($con));

    if ($updated_student) {
        echo "\nFaculty updated successfuly";
    }
?>
</body>

</html>