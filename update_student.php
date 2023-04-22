<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Student</title>
</head>

<body style="background-color:rgb(153, 235, 255);">
    <?php
 $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
 $update_input = $_POST['update_input'];
 $select_query = "SELECT * FROM students WHERE prn = $update_input";
 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
 $row = mysqli_fetch_array($select_query_result);

 $select_query_department = "SELECT * FROM departments";
 $select_query_department_result = mysqli_query($con,$select_query_department) or die(mysqli_error($con));
 
 if(!$row){
     echo "No student found";
 }
 else{
?>
    <table>
        <tr>
            <!-- <td>
                <img src="sb.jpg" style=" height:600px; width:700px; margin-top: 50px;margin-left:60px;">
            </td> -->

            <td>
                <div style=" background-color: white;width: 100%;padding-left:100px;" >
                    <form action="update_student.php" method="post"><br>

                        <h1
                            style=" font-family: Georgia, 'Times New Roman', Times, serif;font-size:40px;text-align:center;color: orangered;">
                            UPDATE BOOK </h1>
                        <table>
                            <tr>
                                <td style="padding-left:100px;padding-right:60px;">
                                    <h4>Book ID:</h4>
                                    <input type="text" value="<?php echo $row['first_name']?>"
                                        placeholder="Enter your first name" name="first_name"
                                        style="border: 2px solid black;border-radius:20px;" />
                                </td>

                                <td style="padding-left:100px;padding-right:60px;">
                                    <h4> BOOK NAME:</h4>
                                    <input type="text" value="<?php echo $row['last_name']?>"
                                        placeholder="Enter your last name" name="last_name"
                                        style="border: 2px solid black;border-radius:20px;" />
                                </td>
                            </tr>

                            <tr>
                                <td style="padding-left:100px;padding-right:60px;">
                                    <h4> #:</h4>
                                    <input type="number" value="<?php echo $row['prn']?>" placeholder="Enter your PRN"
                                        name="prn"
                                        style="border: 2px solid black;border-radius:20px; pointer-events:none;" />
                                </td>
                                <td style="padding-left:100px;padding-right:80px;">
                                    <h4>Author Name:</h4>
                                    <input type="email" value="<?php echo $row['email']?>"
                                        placeholder="Enter your email address" name="email"
                                        style="border: 2px solid black;border-radius:20px;" />
                                </td>
                            </tr>

                            <tr>
                                <!-- <td style="padding-left:100px;padding-right:60px;">
                                    <h4>Birthdate:</h4>
                                    <input type="date" value="<?php echo $row['date_of_birth']?>" name="date_of_birth"
                                        style="border: 2px solid black;border-radius:20px;" />
                                </td> -->
                                <!-- <td style="padding-left:100px;padding-right:80px;">
                                    <h4>Department:</h4>
                                    <select name="department" style="border: 2px solid black;border-radius:20px;">
                                        <?php while($row_department = mysqli_fetch_array($select_query_department_result)) { ?>
                                        <option value=<?php echo $row_department['department_id']?>
                                            label=<?php echo $row_department['department_name']?>></option>
                                        <?php } ?>
                                    </select>
                                </td> -->
                            </tr>

                            <tr>
                                <!-- <td style="padding-left:100px;padding-right:60px;">
                                    <h4>Mobile No.:</h4>
                                    <input type="number" value="<?php echo $row['mobile_no']?>" name="mobile_no"
                                        placeholder="Enter your mobile number"
                                        style="border: 2px solid black;border-radius:20px;" /><br />
                                </td> -->
                                <!-- <td style="padding-left:100px;padding-right:80px;">
                                    <h4>Gender:</h4>
                                    <select name="gender" style="border: 2px solid black;border-radius:20px;">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="others">other</option>
                                    </select>
                                </td> -->
                            </tr>

                            <!-- <tr>
                                <td style="padding-left:100px;">
                                    <h4>Address:</h4>
                                    <input type="text" value="<?php echo $row['address']?>" name="address"
                                        style="border: 2px solid black;border-radius:20px;" /> <br />
                            </tr> -->
            </td>
    </table>

    <input type="submit" value="SUBMIT"
        style="border: 2px solid white;border-radius:20px; height:30px; margin-left:330px;color:white; background-color:orangered;width:80px;" />

    </form>
    </div>
    </td>
    </tr>
    </table>
    <?php } ?>

</body>

</html>