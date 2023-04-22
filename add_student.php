<?php
 $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
 $select_query = "SELECT * FROM departments";
 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Student</title>
</head>

<body style="background-color:rgb(153, 235, 255);">
    <table>
        <tr>
            <td>
                <img src="sb.jpg" style=" height:600px; width:700px; margin-top: 50px;margin-left:60px;">
            </td>
            
            <td>
            <div style=" background-color: white;width: 690px; margin-top:50px;height:600px;">
            <form action="../server/add_student.php" method="post"><br>

            <h1 style=" font-family: Georgia, 'Times New Roman', Times, serif;font-size:40px;text-align:center;color: orangered;">Add New Student </h1>
            <table>
                <tr>
                    <td style="padding-left:100px;padding-right:60px;"> <h4>First Name:</h4>
                        <input type="text" placeholder="Enter your first name" name="first_name" style ="border: 2px solid black;border-radius:20px;"/></td>

                    <td style="padding-left:100px;padding-right:60px;"><h4> Last Name:</h4>
                        <input type="text" placeholder="Enter your last name" name="last_name" style ="border: 2px solid black;border-radius:20px;" /></td>
                </tr>

                <tr>
                    <td style="padding-left:100px;padding-right:60px;"><h4> PRN:</h4>
                        <input type="number" placeholder="Enter your PRN" name="prn" style ="border: 2px solid black;border-radius:20px;" /></td>
                    <td style="padding-left:100px;padding-right:80px;"><h4>Email:</h4>
                        <input type="email" placeholder="Enter your email address" name="email" style ="border: 2px solid black;border-radius:20px;" /></td>
                </tr>

                <tr>
                    <td style="padding-left:100px;padding-right:60px;"> <h4>Birthdate:</h4>
                        <input type="date" name="date_of_birth" style ="border: 2px solid black;border-radius:20px;"/></td>
                    <td style="padding-left:100px;padding-right:80px;"> <h4>Department:</h4>
                        <select name="department" style ="border: 2px solid black;border-radius:20px;">
                        <?php while($row = mysqli_fetch_array($select_query_result)) { ?>
                        <option value=<?php echo $row['department_id']?> label=<?php echo $row['department_name']?>></option>
                        <?php } ?> 
                        </select>
                    </td>
                </tr>

                <tr>
                    <td style="padding-left:100px;padding-right:60px;"><h4>Mobile No.:</h4>
                        <input type="number" name="mobile_no" placeholder="Enter your mobile number" style ="border: 2px solid black;border-radius:20px;"/><br /></td>
                    <td style="padding-left:100px;padding-right:80px;"><h4>Gender:</h4>
                        <select name="gender" style ="border: 2px solid black;border-radius:20px;" >
                        <option value="male">male</option>
                        <option value="female">female</option>
                        <option value="others">other</option>
                        </select></td>
                </tr>

                <tr>
                    <td style="padding-left:100px;"><h4>Address:</h4>
                    <input type="text" name="address" style ="border: 2px solid black;border-radius:20px;" /> <br /></tr> </td>
            </table>

            <input type="submit" value="SUBMIT" style ="border: 2px solid white;border-radius:20px; height:30px; margin-left:330px;color:white; background-color:orangered;width:80px;" />

    </form>
    </div>
            </td>
        </tr>
    </table>

    
</body>

</html>