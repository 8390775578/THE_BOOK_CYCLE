<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>

<body>
    <a href="../frontend/index.html">Go to the Home Page</a><br><br>
    
    <?php
    $con = mysqli_connect("localhost","root","","college_management_system") or die(mysqli_error($con));
    // if ($con) {
    //     echo "Connected succesfully";
    // }
    $book_name = $_POST["book_name"];
    $book_id = $_POST["book_id"];
    $book_author = $_POST["book_author"];
    $book_domain = $_POST["book_domain"];

    $insert_query = "INSERT INTO books(book_id, book_name, book_author, book_domain) VALUES ('$book_id', '$book_name','$book_author','$book_domain')" or die($insert_query);
    $book_creation = mysqli_query($con, $insert_query) or die(mysqli_error($con));

    if ($book_creation) {
         echo "New Book added";
    }
?>

</body>

</html>