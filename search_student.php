<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <style>
    * {
        text-align: center;
    }

    th {
        border: 1px solid;
        padding: 15px;
        background-color: rgb(77, 210, 255);
        color: white;
        font-size: 20px;
        border: 2px solid rgb(0, 122, 204);
    }

    .td1 {
        border: 1px solid;
        padding: 12px;
        background-color: white;
        color: rgb(0, 137, 179);
    }
    </style>
</head>

<body>

    <?php
    $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
    // if ($con) {
    //     echo "Connected succesfully";
    // }

    $search_input = $_POST["search_input"];
    $search_attribute = $_POST["search_attribute"];
    $select_query = "SELECT * FROM students WHERE $search_attribute = '$search_input'";
    // echo $select_query;
    $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($select_query_result);
    if(!$row){
        echo "No Student found";
    }
    else{
?>

    <table style=" margin-left:450px;margin-right:120px;">
        <tr>
            <th>#</th>
            <th>BOOK ID</th>
            <th>BOOK NAME</th>
            <!-- <th>Date of Birth</th>
            <th>Department ID</th> -->
            <!-- <th>Mobile No</th>
            <th>Gender</th> -->
            <th>AUTHOR NAME</th>
            <!-- <th>Address</th> -->
        </tr>
        <?php do { ?>

        <tr>
            <td class="td1"><?php echo $row['prn']?></td>
            <td class="td1"><?php echo $row['first_name']?></td>
            <td class="td1"><?php echo $row['last_name']?></td>
            <!-- <td class="td1"><?php echo $row['date_of_birth']?></td>
            <td class="td1"><?php echo $row['department']?></td> -->
            <!-- <td class="td1"><?php echo $row['mobile_no']?></td>
            <td class="td1"><?php echo $row['gender']?></td> -->
            <td class="td1"><?php echo $row['email']?></td>
            <!-- <td class="td1"><?php echo $row['address']?></td> -->
        <tr>
            <?php } while($row = mysqli_fetch_array($select_query_result)); ?>

    </table>
    <?php } ?>
</body>

</html>