<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Result</title>
</head>

<body >
    
<?php
    $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
    // if ($con) {
    //     echo "Connected succesfully";
    // }

    $delete_input = $_POST["delete_input"];
    $delete_query = "DELETE FROM students WHERE prn = $delete_input";
    // echo $select_query;
    $delete_query_result = mysqli_query($con,$delete_query) or die(mysqli_error($con));
    if(!$delete_query_result){
        echo "No student found";
    }
    else{
        echo "Deleted succesfully";
    }
?>
</body>
</html>