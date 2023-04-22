<?php
 $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
 $select_query = "SELECT * FROM students";
 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
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

<body
    style="background-color:rgb(255, 255, 230); border-left: 8px solid rgb(115, 230, 0);; border-right:8px solid rgb(115, 230, 0);;">

    <h1
        style="border-bottom:2px dotted rgb(115, 230, 0);margin-left:120px;margin-right:120px; text-align:left;font-size:50px; color:rgb(0, 102, 204) ;">
        Students</h1>

    <table>
        <tr>
        <td>
                <div style="margin-top:60px;margin-bottom:40px;">
                    <a href="./index.html"
                        style=" border: 3px solid rgb(89, 179, 0); border-radius:10px;margin-left:120px; background-color: rgb(115, 230, 0);padding:10px;color:white; font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;; "><b>Home
                            Page<b></a><br><br>
                </div>
            </td> 
        <td>
                <div style="margin-top:60px;margin-bottom:40px;;padding-right:30px;">
                    <a href="./add_student.php"
                        style=" border: 3px solid rgb(89, 179, 0); border-radius:10px; background-color: rgb(115, 230, 0);padding:10px;color:white; font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;; "><b>Add
                            Student<b></a><br><br>
                </div>
            </td>

            <td>
                <form action="./search_student.php" method="post">
                    <select name="search_attribute" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px; background-color: rgb(115, 230, 0);padding:10px;font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;color:white; ">
                        <option value="prn"><strong>PRN</strong></option>
                        <option value="first_name">First Name</option>
                        <option value="last_name">Last Name</option>
                        <option value="mobile_no">Mobile No</option>
                        <option value="email">Email</option>
                    </select>
                    <input type="text" name="search_input" placeholder="Search for student" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px;font-family:Georgia, 'Times New Roman', Times, serif;"/>
                    <input type="submit" value="Search" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px;font-family:Georgia, 'Times New Roman', Times, serif;">
                </form>
            </td>
            <td>
                <form action="./delete_student.php" method="post">
                    <input type="text" name="delete_input" placeholder="Enter PRN to delete" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px;font-family:Georgia, 'Times New Roman', Times, serif;" />
                    <input type="submit" value="Delete" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px;font-family:Georgia, 'Times New Roman', Times, serif;">
                </form>
            </td>
            <td>
                <form action="./update_student.php" method="post">
                    <input type="text" name="update_input" placeholder="Enter PRN to update" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px; font-family:Georgia, 'Times New Roman', Times, serif;" />
                    <input type="submit" value="Update" style=" border: 3px solid rgb(89, 179, 0); border-radius:10px; font-family:Georgia, 'Times New Roman', Times, serif;">
                </form>
            </td>
        </tr>
    </table>

    <table style=" margin-left:120px;margin-right:120px;">
        <tr>
            <th>PRN</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Department ID</th>
            <th>Mobile No</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
        <?php while($row = mysqli_fetch_array($select_query_result)) { ?>

        <tr>
            <td class="td1"><?php echo $row['prn']?></td>
            <td class="td1"><?php echo $row['first_name']?></td>
            <td class="td1"><?php echo $row['last_name']?></td>
            <td class="td1"><?php echo $row['date_of_birth']?></td>
            <td class="td1"><?php echo $row['department']?></td>
            <td class="td1"><?php echo $row['mobile_no']?></td>
            <td class="td1"><?php echo $row['gender']?></td>
            <td class="td1"><?php echo $row['email']?></td>
            <td class="td1"><?php echo $row['address']?></td>
        <tr>
            <?php } ?>

    </table>
</body>

</html>